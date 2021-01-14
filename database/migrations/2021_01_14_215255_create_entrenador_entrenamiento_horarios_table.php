<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrenadorEntrenamientoHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrenador_entrenamiento_horarios', function (Blueprint $table) {
            $table->integer('entrenadores_id')->unique();
            $table->integer('entrenamiento_horario_id')->unique();
            $table->foreign('entrenadores_id')->references('id')->on('entrenadors')->onDelete('cascade');
            $table->foreign('entrenamiento_horario_id')->references('id')->on('entrenamiento_horarios')->onDelete('cascade');
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
        Schema::dropIfExists('entrenador_entrenamiento_horarios');
    }
}
