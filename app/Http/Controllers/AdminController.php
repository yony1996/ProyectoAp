<?php

namespace App\Http\Controllers;

use App\Appoiment;
use App\Doctor;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function index()
    {

        $user = Auth::user()->getRoleNames()->first();
      
        $patients = Patient::all();
        $doctors = Doctor::all();
        
        if ($user == 'admin') {

            return view('Admin.index', compact('patients', 'doctors'));
        } elseif ($user == 'medico') {
            $patients = Patient::all();
            $PendingAppoiments = Appoiment::where('status', 'Reservada')->where('doctor_id', Auth::user()->doctor->id)->paginate(5);
            return view('Doctor.index', compact('patients', 'PendingAppoiments'));
        } else {
            

            $ConfirmedAppoiments = Appoiment::where('status', 'Confirmada')->where('patient_id', Auth::user()->patient->id)->paginate(5);

            return view('Patient.index', compact('ConfirmedAppoiments'));
            
            
        }
    }
}
