<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'ci', 'middle_name', 'last_name', 'second_last_name', 'phone',
    ];
    protected $hidden = [
        'pivot'
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
}
