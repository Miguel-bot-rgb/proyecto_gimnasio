<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recibo extends Model
{
    use HasFactory;


    // Relacion uno a muchos (inverso)
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Relacion uno a muchos (inverso)
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
    
    // Relacion muchos a muchos
    public function entrenamientos_horarios()
    {
        return $this->belongsToMany(Entrenamiento_horario::class);
    }

    // Relacion muchos a muchos
    public function membresias()
    {
        return $this->belongsToMany(Membresia::class);
    }
}
