<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserva extends Model
{
    use HasFactory;
    // relacion muchos a muchos
    public function pagos(){
        return $this->belongsToMany('app\Models\pagos');
    }
}
