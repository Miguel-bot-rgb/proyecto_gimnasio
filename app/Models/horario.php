<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    // Relacion de uno a muchos
    public function entrenamientos_horarios()
    {
        return $this->hasMany(Entrenamiento_horario::class);
    }
}
