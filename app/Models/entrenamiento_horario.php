<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrenamiento_horario extends Model
{
    use HasFactory;

    // Relacion de uno a muchos (inverso)
    public function persona()
    {
        return $this->belongsTo(Persona::class, 'persona_dni', 'dni');
    }
    
    // Relacion de uno a muchos (inverso)
    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class);
    }

    // Relacion de uno a muchos (inverso)
    public function horario()
    {
        return $this->belongsTo(Horario::class);
    }

    // Relacion muchos a muchos
    public function recibos()
    {
        return $this->belongsToMany(Recibo::class);
    }

    // Relacion uno a muchos
    public function asistencias()
    {
        return $this->hasMany(Asistencia::class);
    }
}
