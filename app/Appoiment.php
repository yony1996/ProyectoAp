<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Appoiment extends Model
{
    protected $fillable = [
        'description',
        'specialty_id',
        'doctor_id',
        'patient_id',
        'scheduled_date',
         'scheduled_time',
        'type'
    ];

    protected $hidden=[
        'scheduled_time',
        'specialty_id',
        'doctor_id',

    ];
     protected $appends=[
        'scheduled_time_12'

    ];



    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    //accesor->scheduled_time_12
    public function getScheduledTime12Attribute()
    {
        return (new Carbon($this->scheduled_time))->format('g:i A');
    }

    public function cancellation()
    {
        return $this->hasOne(CancelledAppoiment::class);
    }

    static public function createForPatient(Request $request,$patientId){

        $data = $request->only([
            'description',
            'specialty_id',
            'doctor_id',
            'scheduled_date',
            'scheduled_time',
            'type',
        ]);
        $data['patient_id'] = $patientId;

        $carbonTime = Carbon::createFromFormat('g:i A', $data['scheduled_time']);
        $data['scheduled_time'] = $carbonTime->format('H:i:s');

        return self::create($data);

    }


}
