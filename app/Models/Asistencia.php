<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    use HasFactory;

    // Relacion uno a muchos (inverso)
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Relacion uno a muchos (inverso)
    public function entrenamiento_horario()
    {
        return $this->belongsTo(Entrenamiento_horario::class);
    }
}
