<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecibosEntrenamientoHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibos_entrenamiento_horarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recibo_id');
            $table->unsignedBigInteger('entrenamiento_horario_id');
            $table->foreign('recibo_id')->references('id')->on('recibos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('recibos_entrenamiento_horarios');
    }
}
