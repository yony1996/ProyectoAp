<?php

namespace App\Http\Controllers;

use App\Appoiment;
use App\Interfaces\ScheduleServiceInterface;
use App\Specialty;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppoimentController extends Controller
{
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

    public function store(Request $request)
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

        $this->validate($request, $rules, $messages);
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
}
