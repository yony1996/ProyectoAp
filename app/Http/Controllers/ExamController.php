<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function create()
    {
        return view('Doctor.Documents.Exams.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
