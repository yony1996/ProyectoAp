<?php

namespace App\Http\Controllers;

use App\Specialty;
use Illuminate\Http\Request;

class AppoimentController extends Controller
{
    public function create()
    {
        $specialties = Specialty::all();
        return view('Appoiment.create', compact('specialties'));
    }

    public function store(Request $request)
    {
    }
}
