<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\WorkDay;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function hours(Request $request)
    {
        $rule = [
            'date' => 'required|date_format:"Y-m-d"',
            'doctor_id' => 'required|exists:doctors,id'
        ];
        $this->validate($request, $rule);
        //dd($request->all());
        $date = $request->input('date');
        $dateCarbon = new Carbon($date);
        $i = $dateCarbon->dayOfWeek;
        $day = ($i == 0 ? 6 : $i - 1);

        $doctorId = $request->input('doctor_id');
        //dd($doctorId);
        $workDays = WorkDay::where('active', true)
            ->where('day', $day)
            ->where('doctor_id', $doctorId)
            ->first([
                'morning_start',
                'morning_end',
                'afternoon_start',
                'afternoon_end',

            ]);


        if (!$workDays) {
            return [];
        }


        $morningIntervals = $this->getIntervals($workDays->morning_start, $workDays->morning_end);
        $afternoonIntervals = $this->getIntervals($workDays->afternoon_start, $workDays->afternoon_end);

        $data = [];
        $data['morning'] = $morningIntervals;
        $data['afternoon'] = $afternoonIntervals;
        return $data;
    }

    private function getIntervals($start, $end)
    {
        $start = new Carbon($start);
        $end = new Carbon($end);

        $intervals = [];
        while ($start < $end) {

            $interval = [];

            $interval['start'] = $start->format('g:i A');
            $start->addMinutes(30);
            $interval['end'] = $start->format('g:i A');



            $intervals[] = $interval;
        }
        return $intervals;
    }
}
