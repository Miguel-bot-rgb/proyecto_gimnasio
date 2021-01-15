<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pago extends Model
{
    use HasFactory;
    // relacion muchos a muchos
    public function pruebas(){
        return $this->belongsToMany('app\Models\pruebas');
    }
    public function reservas(){
        return $this->belongsToMany('app\Models\reservas');
    }
}
