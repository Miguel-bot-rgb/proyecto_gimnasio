<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oficio extends Model
{
    use HasFactory;

    protected $fillable = ['Resposabilidad', 'Sueldo'];

    // public function getRouteKeyName()
    // {
    //     return "oficios";
    // }

}
