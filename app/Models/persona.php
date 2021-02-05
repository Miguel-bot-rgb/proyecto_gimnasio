<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $primaryKey = 'dni';
    public $incrementing = false;
    
    // Relacion de uno a muchos (inverso)
    public function direccion()
    {
        return $this->belongsTo(Direccion::class);
    }

    // Relacion uno a muchos
    public function entrenamientos_horarios()
    {
        return $this->hasMany(Entrenamiento_horario::class, 'persona_dni', 'dni');
    }

    // Relacion uno a muchos
    public function recibos()
    {
        return $this->hasMany(Recibo::class, 'persona_dni', 'dni');
    }
}
