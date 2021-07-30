<?php

namespace App\Http\Controllers;

use App\Appoiment;
use App\CancelledAppoiment;
use App\Interfaces\ScheduleServiceInterface;
use App\Http\Requests\StoreAppointment;
use App\Specialty;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class AppoimentController extends Controller
{
    public function index()
    {
        $role = Auth::user()->getRoleNames()->first();

        if ($role == 'admin') {
            $PendingAppoiments = Appoiment::where('status', 'Reservada')->paginate(5);
            $ConfirmedAppoiments = Appoiment::where('status', 'Confirmada')->paginate(5);
            $OldAppoiments = Appoiment::whereIn('status', ['Atendida', 'Cancelada'])->paginate(5);
        } elseif ($role == 'medico') {
            $PendingAppoiments = Appoiment::where('status', 'Reservada')->where('doctor_id', Auth::user()->doctor->id)->paginate(5);
            $ConfirmedAppoiments = Appoiment::where('status', 'Confirmada')->where('doctor_id', Auth::user()->doctor->id)->paginate(5);
            $OldAppoiments = Appoiment::whereIn('status', ['Atendida', 'Cancelada'])->where('doctor_id', Auth::user()->doctor->id)->paginate(5);
        } elseif ($role == 'paciente') {
            $PendingAppoiments = Appoiment::where('status', 'Reservada')->where('patient_id', Auth::user()->patient->id)->paginate(5);
            $ConfirmedAppoiments = Appoiment::where('status', 'Confirmada')->where('patient_id', Auth::user()->patient->id)->paginate(5);
            $OldAppoiments = Appoiment::whereIn('status', ['Atendida', 'Cancelada'])->where('patient_id', Auth::user()->patient->id)->paginate(5); //where('patiente', Auth::user()->patient->id)->get();

        }
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

    public function store(StoreAppointment $request)
    {


        $date=$request->input('scheduled_date');
        $appoiment=Appoiment::where('patient_id',Auth::user()->patient->id)->whereDate('scheduled_date','=',$date)->count();
        if($appoiment>0){
            $error='ok-Dap';
            return back()->with(compact('error'));
        }


        $created= Appoiment::createForPatient($request,Auth::user()->patient->id);

        if($created){
            $notification = 'La cita se ha registrado correctarmente.';
        }else{
            $notification = 'Ocurrio un problema al registrar la cita medica.';
        }

        return back()->with(compact('notification'));
    }

    public function PostCancel(Appoiment $appoiment, Request $request)
    {
        if ($request->has('justification')) {
            $cancellation = new CancelledAppoiment();
            $cancellation->justification = $request->input('justification');
            $cancellation->cancelled_by_id = Auth::user()->id;

            $appoiment->cancellation()->save($cancellation);
        }
        $appoiment->status = 'Cancelada';
        $appoiment->save();

        $notification = 'La cita se ha cancelado correcatamente.';
        return redirect()->route('appoiment')->with(compact('notification'));
    }

    public function ShowCancelForm(Appoiment $appoiment)
    {

            return view('Appoiment.cancel', compact('appoiment'));

    }

    public function PostConfirm(Appoiment $appoiment)
    {
        $appoiment->status = 'Confirmada';
        $appoiment->save();

        $notification = 'La cita se ha confirmado correcatamente.';
        return redirect()->route('appoiment')->with(compact('notification'));
    }

    public function Attended(Appoiment $appoiment)
    {
        $appoiment->status = 'Atendida';
        $appoiment->save();

        $notification = 'La cita fue se ha marcado como atendida.';
        return redirect()->route('appoiment')->with(compact('notification'));

    }
}
