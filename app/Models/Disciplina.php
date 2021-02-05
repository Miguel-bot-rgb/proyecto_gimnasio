<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    // Relacion de uno a muchos (inverso)
    public function seccion()
    {
        return $this->belongsTo(Seccion::class);
    }

    // Relacion de uno a muchos
    public function entrenamientos_horarios()
    {
        return $this->hasMany(Entrenamiento_horario::class);
    }

    // Relacion muchos a muchos
    public function membresias()
    {
        return $this->belongsToMany(Membresia::class);
    }
}
