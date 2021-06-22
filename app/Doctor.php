<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'ci', 'middle_name', 'last_name', 'second_last_name', 'phone',
    ];
    protected $hidden = [
        'pivot','created_at','updated_at','user_id'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function specialties()
    {
        return $this->belongsToMany(Specialty::class)->withTimestamps();
    }

    public function exams()
    {
        return $this->hasToMany(Exam::class);
    }
    public function record()
    {
        return $this->hasToMany(Record::class);
    }

    public function asDoctorAppoiments()
    {
        return $this->hasMany(Appoiment::class, 'doctor_id');
    }

    public function attendedAppoiments()
    {
        return $this->asDoctorAppoiments()->where('status','Atendida');
    }

    public function cancelledAppoiments()
    {
        return $this->asDoctorAppoiments()->where('status','Cancelada');
    }
}
