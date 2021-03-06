<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\ScheduleServiceInterface;
use App\WorkDay;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function hours(Request $request, ScheduleServiceInterface $scheduleService)
    {
        $rule = [
            'date' => 'required|date_format:"Y-m-d"',
            'doctor_id' => 'required|exists:doctors,id'
        ];
        $this->validate($request, $rule);
        //dd($request->all());
        $date = $request->input('date');
        $doctorId = $request->input('doctor_id');
        //dd($doctorId);
        return $scheduleService->getAvailableIntervals($date, $doctorId);
    }
}
