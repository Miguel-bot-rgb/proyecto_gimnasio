<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    use HasFactory;
    public function disciplinas()
    {
        return $this->hasMany(Disciplina::class);
    }
}
