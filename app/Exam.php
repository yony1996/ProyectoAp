<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
        'hematologia', 'uroanalisis', 'coprologico', 'quimica', 'serologia', 'bacteriologia', 'otros'
    ];

     protected $casts = [
    'created_at' => 'datetime:Y-m-d', 
    'updated_at' => 'datetime:Y-m-d',
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
