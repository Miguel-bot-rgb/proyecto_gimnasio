<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entrenamiento extends Model
{
    use HasFactory;

    protected $fillable = ['observacion', 'estado', 'servicios_id', 'secciones_id'];

    public function servicio()
    {
        return $this->belongsTo(servicio::class);
    }
    public function seccion()
    {
        return $this->belongsTo(seccion::class);
    }
}
