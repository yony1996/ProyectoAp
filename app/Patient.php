<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'ci', 'middle_name', 'last_name', 'second_last_name', 'phone', 'age',
    ];
     protected $hidden = [
        'created_at','updated_at','user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
    public function asPatientAppoiments()
    {
        return $this->hasMany(Appoiment::class, 'patient_id');
    }
    public function record()
    {
        return $this->hasMany(Record::class);
    }
}
