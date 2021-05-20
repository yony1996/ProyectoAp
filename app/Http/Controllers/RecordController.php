<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function create($id)
    {
        $patient = Patient::find($id);

        return view('Doctor.Documents.Record.create', compact('patient'));
    }
}
