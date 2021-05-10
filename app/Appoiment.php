<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
