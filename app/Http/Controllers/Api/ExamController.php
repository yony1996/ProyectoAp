<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use PDF;
use App\Exam;
use Illuminate\Support\Facades\Storage;
use File;


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














    }
}
