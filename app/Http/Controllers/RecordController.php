<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Record;
use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RecordController extends Controller
{
    public function index()
    {
        $doctor_id = Auth::user()->doctor->id;

        $records = Record::where('doctor_id', $doctor_id)->get();

        return view('Doctor.Documents.Record.index', compact('records'));
    }
    public function print($id)
    {


        $record = Record::find($id)->first();

        $pdf = PDF::loadView('pdf.record', compact('record'));
        $pdf->setPaper('A4');

        $FechaHoy = Carbon::now()->format('Y-m-d_H:i:s');
        return $pdf->download('Ficha_Medica_' . $FechaHoy . '.pdf');
    }
    public function preview($id)
    {


        $record = Record::where('id', $id)->first();

        $pdf = PDF::loadView('pdf.record', compact('record'));
        $pdf->setPaper('A4');
        return $pdf->stream();
    }




    public function create($id)
    {
        $patient = Patient::find($id);

        return view('Doctor.Documents.Record.create', compact('patient'));
    }

    public function edit($id)
    {
        $records = Record::where('id', $id)->first();
        $patient = Patient::find($records->patient->id);

        return view('Doctor.Documents.Record.create', compact('records', 'patient'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $patient_id = $request->input('patient_id');
        $anamnesis = $request->input('anamnesis');
        $gender = $request->input('gender');
        $ethnicity = $request->input('ethnicity');
        $marital_status = $request->input('marital_status');
        $work = $request->input('work');
        $seaside = $request->input('seaside');
        $residence = $request->input('residence');
        $instruction = $request->input('instruction');
        $type_of_blood = $request->input('type_of_blood');
        $direction = $request->input('direction');
        $reason = $request->input('reason');
        $disease = $request->input('disease');
        $fac = $request->input('fac');
        $frc = $request->input('frc');
        $ca = $request->input('ca');
        $fc = $request->input('fc');
        $sa = $request->input('sa');
        $e = $request->input('e');
        $rm = $request->input('rm');
        $ea = $request->input('ea');
        $eg = $request->input('eg');
        $egs = $request->input('egs');
        $cir = $request->input('cir');
        $aler = $request->input('aler');

        Record::updateOrCreate(
            [
                'patient_id' => $patient_id,
                'doctor_id' => Auth::user()->doctor->id,
            ],
            [
                'anamnesis' => $anamnesis,
                'gender' => $gender,
                'ethnicity' => $ethnicity,
                'marital_status' => $marital_status,
                'work' => $work,
                'seaside' => $seaside,
                'residence' => $residence,
                'instruction' => $instruction,
                'type_of_blood' => $type_of_blood,
                'direction' => $direction,
                'reason' => $reason,
                'disease' => $disease,
                'fac' => $fac,
                'frc' => $frc,
                'ca' => $ca,
                'fc' => $fc,
                'sa' => $sa,
                'e' => $e,
                'rm' => $rm,
                'ea' => $ea,
                'eg' => $eg,
                'egs' => $egs,
                'cir' => $cir,
                'aler' => $aler,
            ]
        );

        $notification = 'La ficha medica se ha guardado correctamente';
        return back()->with(compact('notification'));
    }
}
