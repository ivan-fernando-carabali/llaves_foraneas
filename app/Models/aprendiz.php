<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aprendiz extends Model
{
    public function couse()
    {
        return $this->belongsTo(Couse::class);
    }

    public function computer()
    {
        return $this->belongsTo(Computer::class);
    }
}
