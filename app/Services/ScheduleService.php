<?php

namespace App\Services;

use App\Interfaces\ScheduleServiceInterface;
use App\WorkDay;
use Carbon\Carbon;

class ScheduleService implements ScheduleServiceInterface
{
    private function getDayFromDate($date)
    {

        $dateCarbon = new Carbon($date);
        $i = $dateCarbon->dayOfWeek;
        $day = ($i == 0 ? 6 : $i - 1);
        return $day;
    }
    public function getAvailableIntervals($date, $doctorId)
    {
        $workDays = WorkDay::where('active', true)
            ->where('day', $this->getDayFromDate($date))
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
