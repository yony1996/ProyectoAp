<?php

namespace App\Http\Controllers;

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

            return view('Admin.index');
        } elseif ($user == 'medico') {
            return view('Doctor.index');
        } else {
            return view('Patient.index');
        }
    }
}
