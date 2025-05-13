<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class couse extends Model
{
        public function aprendizs()
    {
        return $this->hasMany(Aprendiz::class);
    }
    public function areas()
    {
        return $this->belongsToMany(Area::class);
    }
            public function training_centers()
    {
        return $this->belongsTo(Training_Center::class);
    }
}
