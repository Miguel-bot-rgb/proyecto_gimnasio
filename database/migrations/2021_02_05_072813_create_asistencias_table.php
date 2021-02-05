<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_dni');
            $table->unsignedBigInteger('entrenamiento_horario_id');
            $table->tinyInteger('asistencia');
            $table->foreign('cliente_dni')->references('dni')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('entrenamiento_horario_id')->references('id')->on('entrenamiento_horarios')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('asistencias');
    }
}
