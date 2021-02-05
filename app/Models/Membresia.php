<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    use HasFactory;

    // Relacion uno a muchos (inverso)
    public function membresia_plan()
    {
        return $this->belongsTo(Membresia_plan::class);
    }

    // Relacion muchos a muchos
    public function disciplinas()
    {
        return $this->belongsToMany(Disciplina::class);
    }

    // Relacion muchos a muchos
    public function recibos()
    {
        return $this->belongsToMany(Recibo::class);
    }
}
