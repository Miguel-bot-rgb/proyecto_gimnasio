<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seccion extends Model
{
    use HasFactory;
    protected $fillable = ['nombreSC', 'descripcion'];

    public function entrenamiento()
    {
        return $this->hasMany(entrenamiento::class);
    }
}
