<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrenamiento_horario extends Model
{
    use HasFactory;
    public function horario()
    {
        return $this->belongsTo(Horario::class);
    }
}
