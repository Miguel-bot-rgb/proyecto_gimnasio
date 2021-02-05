<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membresia_plan extends Model
{
    use HasFactory;

    // Relacion uno a muchos
    public function membresias()
    {
        return $this->hasMany(Membresia::class);
    } 
}
