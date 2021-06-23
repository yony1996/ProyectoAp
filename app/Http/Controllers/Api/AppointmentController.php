<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Patient;
use App\Appoiment;
use App\Http\Request\StoreAppointment;

class AppointmentController extends Controller
{
	
    public function index()
    {
    	$user= Auth::guard('api')->user()->patient;
    	

    	$appointments =$user->asPatientAppoiments()
    	->with([
    		'specialty'=>function($query){
    			$query->select('id','name');
    		},
    		'doctor'=>function($query){
    			$query->select('id','last_name');	
    		}

    	])
    	->get([
    		"id",
	        "description",
	        "specialty_id",
	        "doctor_id",
	        "scheduled_date",
	        "scheduled_time",
	        "type",
	        "created_at",
	        "status"
    	]);

    	return compact('appointments');

    }

    public function store(StoreAppointment $request)
    {
    	$success=Appoiment::createForPatient($request,Auth::user()->patient->id);
    	
    	return compact('success');	
    }
}
