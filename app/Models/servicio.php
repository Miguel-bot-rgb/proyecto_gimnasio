<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicio extends Model
{
    use HasFactory;

    protected $fillable = ['nombreS', 'descripcion'];

    public function entrenamiento()
    {
        return $this->hasMany(entrenamiento::class);
    }
}