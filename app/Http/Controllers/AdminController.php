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
            return view('Doctor.index', compact('patients'));
        } else {
            return view('Patient.index');
        }
    }
}
