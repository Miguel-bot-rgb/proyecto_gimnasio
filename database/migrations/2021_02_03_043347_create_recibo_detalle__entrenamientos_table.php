<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReciboDetalleEntrenamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibo_detalle__entrenamientos', function (Blueprint $table) {
            $table->unsignedBigInteger('recibo_nro');
            $table->foreign('recibo_nro')->references('id')->on('recibos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('Entrenamiento_h_id');
            $table->foreign('Entrenamiento_h_id')->references('id')->on('entrenamiento_horarios')->cascadeOnDelete()->cascadeOnUpdate();
            
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
        Schema::dropIfExists('recibo_detalle__entrenamientos');
    }
}
