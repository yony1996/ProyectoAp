<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'anamnesis',
        'gender',
        'ethnicity',
        'marital_status',
        'work',
        'seaside',
        'residence',
        'instruction',
        'type_of_blood',
        'direction',
        'reason',
        'disease',
        'fac',
        'frc',
        'ca',
        'fc',
        'sa',
        'e',
        'rm',
        'ea',
        'eg',
        'egs',
        'cir',
        'aler',
    ];
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
