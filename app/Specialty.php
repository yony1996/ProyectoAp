<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    public function doctor()
    {
        return $this->belongsToMany(Doctor::class)->withTimestamps();
    }
}
