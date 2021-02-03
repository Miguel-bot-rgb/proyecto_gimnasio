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
            $table->dateTime('fecha_hora');
            $table->unsignedBigInteger('c_dni');
            $table->foreign('c_dni')->references('dni')->on('clientes')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('Entre_Horario_id');
            $table->foreign('Entre_Horario_id')->references('id')->on('entrenamiento_horarios')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('asistencia');
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
