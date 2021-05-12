<?php

namespace App\Http\Controllers;

use App\Appoiment;
use App\CancelledAppoiment;
use App\Interfaces\ScheduleServiceInterface;
use App\Specialty;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class AppoimentController extends Controller
{
    public function index()
    {
        $PendingAppoiments = Appoiment::where('status', 'Reservada')->where('patient_id', Auth::user()->patient->id)->paginate(5);
        $ConfirmedAppoiments = Appoiment::where('status', 'Confirmada')->where('patient_id', Auth::user()->patient->id)->paginate(5);
        $OldAppoiments = Appoiment::whereIn('status', ['Atendida', 'Cancelada'])->where('patient_id', Auth::user()->patient->id)->paginate(5); //where('patiente', Auth::user()->patient->id)->get();
        return view('Appoiment.index', compact('PendingAppoiments', 'ConfirmedAppoiments', 'OldAppoiments'));
    }
    public function show(Appoiment $appoiment)
    {
        return view('Appoiment.show', compact('appoiment'));
    }

    public function create(ScheduleServiceInterface $scheduleService)
    {
        $specialties = Specialty::all();
        $specialtyId = old('specialty_id');
        if ($specialtyId) {
            $specialty = Specialty::find($specialtyId);
            $doctors = $specialty->doctor;
        } else {
            $doctors = [];
        }

        $date = old('scheduled_date');
        $doctorId = old('doctor_id');
        if ($date && $doctorId) {
            $intervals = $scheduleService->getAvailableIntervals($date, $doctorId);
        } else {
            $intervals = null;
        }

        return view('Appoiment.create', compact('specialties', 'doctors', 'intervals'));
    }

    public function store(Request $request, ScheduleServiceInterface $scheduleService)
    {
        $rules = [
            'description' => 'required',
            'specialty_id' => 'exists:specialties,id',
            'doctor_id' => 'exists:doctors,id',
            'scheduled_time' => 'required',

        ];
        $messages = [
            'scheduled_time.required' => 'Por favor seleccione una hora valida para la cita.'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        $validator->after(function ($validator) use ($request, $scheduleService) {
            $date = $request->input('scheduled_date');
            $doctorId = $request->input('doctor_id');
            $scheduled_time = $request->input('scheduled_time');
            if ($date && $doctorId && $scheduled_time) {
                $start = new Carbon($scheduled_time);
            } else {
                return;
            }
            if (!$scheduleService->isAvailableInterval($date, $doctorId, $start)) {
                $validator->errors()
                    ->add('available_time', 'La hora seleccionada ya se encuentra reservada por otro paciente.');
            }
        });
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = $request->only([
            'description',
            'specialty_id',
            'doctor_id',
            'scheduled_date',
            'scheduled_time',
            'type',
        ]);
        $data['patient_id'] = Auth::user()->patient->id;
        $carbonTime = Carbon::createFromFormat('g:i A', $data['scheduled_time']);
        $data['scheduled_time'] = $carbonTime->format('H:i:s');
        Appoiment::create($data);

        $notification = 'La cita se ha registrado correctarmente.';
        return back()->with(compact('notification'));
    }

    public function PostCancel(Appoiment $appoiment, Request $request)
    {
        if ($request->has('justification')) {
            $cancellation = new CancelledAppoiment();
            $cancellation->justification = $request->input('justification');
            $cancellation->cancelled_by = Auth::user()->id;

            $appoiment->cancellation()->save($cancellation);
        }
        $appoiment->status = 'Cancelada';
        $appoiment->save();

        $notification = 'La cita se ha cancelado correcatamente.';
        return redirect()->route('appoiment')->with(compact('notification'));
    }

    public function ShowCancelForm(Appoiment $appoiment)
    {
        if ($appoiment->status == 'Confirmada') {
            return view('Appoiment.cancel', compact('appoiment'));
        }
        return redirect()->route('appoiment');
    }
}
