<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Exam;
use App\Patient;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ExamController extends Controller
{

    public function index(Exam $exam)
    {
        $doctor_id = Auth::user()->doctor->id;

        $doctor = Doctor::find($doctor_id);
        $exams = $doctor->exams()->get();
        $examss = $exam->patient()->get();



        dd($exams, $examss);
        return view('Doctor.Documents.Exams.index', compact('exams'));
    }
    public function print()
    {

        $pdf = PDF::loadView('pdf.exam');
        return $pdf->stream();
    }
    public function create($id)
    {
        $patient = Patient::find($id);

        return view('Doctor.Documents.Exams.create', compact('patient'));
    }

    public function store(Request $request)
    {

        // dd($request->all());
        //$input = $request->all();
        $exam = new Exam();
        $exam->hematologia = implode(',', $request->input('hematologia'));
        $exam->uroanalisis = implode(',', $request->input('uroanalisis'));
        $exam->coprologico = implode(',', $request->input('coprologico'));
        $exam->quimica = implode(',', $request->input('quimica'));
        $exam->serologia = implode(',', $request->input('serologia'));
        $exam->bacteriologia = implode(',', $request->input('bacteriologia'));
        //dd($exam);
        $exam->save();

        $exam->patient()->attach($request->input('patient_id'));
        $doctor_id = Auth::user()->doctor->id;
        $exam->doctor()->attach($doctor_id);
        //dd($input);


        /* $patient_id = $request->input('patient_id');
        $doctor->specialties()->attach($request->input('specialties'));
        $doctor_id = Auth::user()->doctor->id;*/

        return redirect()->route('dashboard');
    }
}
