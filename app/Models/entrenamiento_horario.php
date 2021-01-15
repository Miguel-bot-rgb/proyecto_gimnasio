<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entrenamiento_horario extends Model
{
    use HasFactory;
    // relacion muchos a muchos
    public function entrenadors(){
        return $this->belongsToMany('app\Models\entrenador');
    }
}
