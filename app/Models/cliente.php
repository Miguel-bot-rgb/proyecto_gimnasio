<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $primaryKey = 'dni';
    public $incrementing = false;

    // Relacion uno a muchos
    public function recibos()
    {
        return $this->hasMany(Recibo::class, 'cliente_dni', 'dni');
    }

    // Relacion uno a muchos
    public function asistencias()
    {
        return $this->hasMany(Asistencia::class, 'cliente_dni', 'dni');
    }
}
