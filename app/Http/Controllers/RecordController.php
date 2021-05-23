<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function create()
    {
        return view('Doctor.Documents.Record.create');
    }

    public function store(Request $request)
    {
    }
}
