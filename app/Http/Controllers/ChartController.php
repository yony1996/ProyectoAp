<?php

namespace App\Http\Controllers;

use App\Appoiment;
use App\Doctor;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    public function appoiments()
    {
        $appoiments=Appoiment::all()->count();

        if($appoiments>0){
            //mysql
           /* $monthlyCounts = Appoiment::select(
            DB::raw('MONTH(created_at) as month'),
            DB::raw('COUNT(1) as count')
            )->groupBy('month')->get()->toArray();*/
            //pgsql
            $monthlyCounts = Appoiment::select('created_at',
             DATE_TRUNC('month',created_at) AS month),
             COUNT(1) AS count
            )->groupBy('month')->get()->toArray();

            $counts = array_fill(0, 12, 0);

            foreach ($monthlyCounts as $monthlyCount) {
                $index = $monthlyCount['month'] - 1;
                $counts[$index] = $monthlyCount['count'];
            }

            return view('charts.appoiment', compact('counts'));
        }else{
            $notification='Aun no existen citas registradas para mostrar esta grafica.';
            return back()->with(compact('notification'));
        }


    }

    public function doctors()
    {

        $now=Carbon::now();
        $end=$now->format('Y-m-d');
        $start=$now->subYear()->format('Y-m-d');


        return view('charts.doctors',compact('start','end'));
    }

    public function doctorsJson(Request $request)
    {
        $start=$request->input('start');
        $end=$request->input('end');
        $doctors = Doctor::join('users', 'users.id', '=', 'doctors.user_id')
            ->select('users.name')
            ->withCount([
                'attendedAppoiments'=>function($query) use ($start,$end){
                    $query->whereBetween('scheduled_date',[$start,$end]);
                },
                'cancelledAppoiments'=>function($query) use ($start,$end){
                    $query->whereBetween('scheduled_date',[$start,$end]);
                }
            ])
            ->OrderBy('attended_appoiments_count', 'desc')
            ->take(3)
            ->get();



        $data = [];
        $data['categories'] = $doctors->pluck('name');
        $series = [];
        //Atendidas
        $series1['name']='Citas atendidas';
        $series1['data'] = $doctors->pluck('attended_appoiments_count');
        $series1['color']='#e600e6';
        //canceladas
        $series2['name']='Citas canceladas';
        $series2['data'] = $doctors->pluck('cancelled_appoiments_count');
        $series2['color']='#f05697';
        $series[] = $series1;
        $series[] = $series2;
        $data['series'] = $series;

        return $data;
    }
}
