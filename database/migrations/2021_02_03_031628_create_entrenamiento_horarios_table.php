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
            $table->unsignedBigInteger('p_dni');
            $table->foreign('p_dni')->references('dni')->on('personas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('d_id');
            $table->foreign('d_id')->references('id')->on('diciplinas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('h_id');
            $table->foreign('h_id')->references('id')->on('horarios')->cascadeOnDelete()->cascadeOnUpdate();
            $table->integer('cupos');
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
        Schema::dropIfExists('entrenamiento_horarios');
    }
}
