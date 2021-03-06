<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Exam;
use App\Patient;
use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ExamController extends Controller
{

    public function index()
    {
        $doctor_id = Auth::user()->doctor->id;

        $exams = Exam::where('doctor_id', $doctor_id)->get();
        //dd($exams);
        return view('Doctor.Documents.Exams.index', compact('exams'));
    }
    public function print($id)
    {
        $exams = Exam::where('id', $id)->first();
        $hematologia = array_map('strval', explode(',', $exams->hematologia));
        $uroanalisis = array_map('strval', explode(',', $exams->uroanalisis));
        $coprologico = array_map('strval', explode(',', $exams->coprologico));
        $quimica = array_map('strval', explode(',', $exams->quimica));
        $serologia = array_map('strval', explode(',', $exams->serologia));
        $bacteriologia = array_map('strval', explode(',', $exams->bacteriologia));


        $pdf = PDF::loadView('pdf.exam', compact(
            'exams',
            'hematologia',
            'uroanalisis',
            'coprologico',
            'quimica',
            'serologia',
            'bacteriologia'
        ));
        $pdf->setPaper('A4', 'landscape');

        $FechaHoy = Carbon::now()->format('Y-m-d_H:i:s');
        return $pdf->download('Orden_de_Examen_' . $FechaHoy . '.pdf');
    }
    public function preview($id)
    {


        $exams = Exam::where('id', $id)->first();
        $hematologia = array_map('strval', explode(',', $exams->hematologia));
        $uroanalisis = array_map('strval', explode(',', $exams->uroanalisis));
        $coprologico = array_map('strval', explode(',', $exams->coprologico));
        $quimica = array_map('strval', explode(',', $exams->quimica));
        $serologia = array_map('strval', explode(',', $exams->serologia));
        $bacteriologia = array_map('strval', explode(',', $exams->bacteriologia));


        $pdf = PDF::loadView('pdf.exam', compact(
            'exams',
            'hematologia',
            'uroanalisis',
            'coprologico',
            'quimica',
            'serologia',
            'bacteriologia'
        ));
        $pdf->setPaper('A4', 'landscape');
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

        $exam->hematologia = (!empty($request->input('hematologia'))) ? implode(',', $request->input('hematologia')) : $request->input('hematologia') == 'null';
        $exam->uroanalisis = (!empty($request->input('uroanalisis'))) ? implode(',', $request->input('uroanalisis')) : $request->input('uroanalisis') == 'null';
        $exam->coprologico = (!empty($request->input('coprologico'))) ? implode(',', $request->input('coprologico')) : $request->input('coprologico') == 'null';
        $exam->quimica = (!empty($request->input('quimica'))) ? implode(',', $request->input('quimica')) : $request->input('quimica') == 'null';
        $exam->serologia = (!empty($request->input('serologia'))) ? implode(',', $request->input('serologia')) : $request->input('serologia') == 'null';
        $exam->bacteriologia = (!empty($request->input('bacteriologia'))) ? implode(',', $request->input('bacteriologia')) : $request->input('bacteriologia') == 'null';
        $exam->patient_id = $request->input('patient_id');
        $exam->doctor_id = Auth::user()->doctor->id;

        $exam->save();




        //dd($input);


        /* $patient_id = $request->input('patient_id');
        $doctor->specialties()->attach($request->input('specialties'));
        $doctor_id = Auth::user()->doctor->id;*/

        return redirect()->route('dashboard');
    }
}
