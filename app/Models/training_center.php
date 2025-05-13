<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class training_center extends Model
{
    public function couses()
    {
        return $this->hasMany(Couse::class);
    }

    public function teachers()
    {
        return $this->hasMany(Teacher::class);
    }

  
}
