<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
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
            $table->string('name', 45);
            $table->string('apellido_paterno', 45);
            $table->string('apellido_materno', 45);
            $table->char('sexo', 1);
            $table->integer('edad');
            $table->string('correo')->unique();
            $table->integer('telefono');
            // llave foranea
            $table->unsignedBigInteger('direccion_id')->unique();
            $table->foreign('direccion_id')->references('id')->on('direccions')->onDelete('cascade');

            $table->string('tipo_A')->nullable();
            $table->string('tipo_E')->nullable();
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
        Schema::dropIfExists('personas');
    }
}
