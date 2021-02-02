<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Personas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->integer('dni');
            $table->string('nombre',45);
            $table->string('apellido_p',45);
            $table->string('apellido_m',45);
            $table->integer('edad');
            $table->string('sexo',1);
            $table->string('telefono',45)->nullable();
            $table->string('correo',45)->unique();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
