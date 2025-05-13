<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class computer extends Model
{
        public function aprendiz()
    {
        return $this->hasMany(Aprendiz::class);
    }
}
