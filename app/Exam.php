<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
        'hematologia', 'uroanalisis', 'coprologico', 'quimica', 'serologia', 'bacteriologia', 'otros'
    ];
    protected $hidden = [
        'pivot'
    ];
    public function doctor()
    {
        return $this->belongsToMany(Doctor::class)->withTimestamps();
    }
    public function patient()
    {
        return $this->belongsToMany(Patient::class)->withTimestamps();
    }
}
