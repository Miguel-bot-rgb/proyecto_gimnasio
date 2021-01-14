<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrenamientoHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrenamiento_horarios', function (Blueprint $table) {
            $table->id();
            $table->integer('cupo_max');
            $table->integer('cupo_maxPrueba');
            $table->text('comentario');
            //llave foranea
            $table->integer('horario_id')->unique();
            $table->integer('entrenamiento_id')->unique();
            $table->foreign('horario_id')->references('id')->on('horarios')->onDelete('cascade');
            $table->foreign('entrenamiento_id')->references('id')->on('entrenamientos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrenamiento_horarios');
    }
}
