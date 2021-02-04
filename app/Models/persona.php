<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $primaryKey = 'dni';
    public $incrementing = false;
    public function direccion()
    {
        return $this->belongsTo(Direccion::class);
    }
}
