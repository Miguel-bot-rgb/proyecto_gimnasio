<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Direccion;
use App\Models\Horario;
use App\Models\Persona;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // Direccion::factory(10)->create();
        // Persona::factory(10)->create();
        // Cliente::factory(10)->create();
        Horario::factory(10)->create();
    }
}
