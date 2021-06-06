<?php

namespace App\Http\Controllers;

use App\Appoiment;
use App\Doctor;
use App\User;
use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    public function appoiments()
    {
        
           $monthlyCounts= Appoiment::select(
                DB::raw('MONTH(created_at) as month'),
                DB::raw('COUNT(1) as count')
            )->groupBy('month')->get()->toArray();


            $counts=array_fill(0,12,0);

            foreach ($monthlyCounts as $monthlyCount) {
                $index=$monthlyCount['month']-1;
                $counts[$index]=$monthlyCount['count'];
            }
        
           
        return view('charts.appoiment',compact('counts'));
    }

    public function doctors()
    {
        return view('charts.doctors');
    }

    public function doctorsJson()
    {
        $doctors=Doctor::join('users','users.id','=','doctors.user_id')
                        ->select('doctors.id','users.name')
                        ->withCount([
                            'attendedAppoiments',
                            'cancelledAppoiments'
                            ])
                        ->OrderBy('attended_appoiments_count','desc')
                        ->take(3)
                        ->get()->toArray();
        dd($doctors);
        //dd($doctors);
        
      
        $data=[];
        $data['categories']=User::role('medico')->pluck('name');
        $series=[];
        //Atendidas
        $series1=1;
        //canceladas
        $series2=2;
        $series[]=$series1;
        $series[]=$series2;
        $data['series']=$series;

        return $data;
    }
}
