<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use PDF;
use App\Exam;

class ExamController extends Controller
{
	
    public function index()
    {
    	$user= Auth::guard('api')->user()->patient;
    	

    	$exams =$user->asPatientExams()->with([
    		
    		'doctor'=>function($query){
    			$query->select('id','last_name');	
    		}

    	])
    	->get([
    		"id",
	        "doctor_id",
	        "created_at",
    	]);
    	

    	
    	return $exams;

    }

    public function download($id)
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
}
