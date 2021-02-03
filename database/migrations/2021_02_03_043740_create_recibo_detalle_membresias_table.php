<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReciboDetalleMembresiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibo_detalle_membresias', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recibo_nro');
            $table->foreign('recibo_nro')->references('id')->on('recibos')->cascadeOnDelete()->cascadeOnUpdate();
            
            $table->unsignedBigInteger('membresia_id');
            $table->foreign('membresia_id')->references('id')->on('membresias')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('recibo_detalle_membresias');
    }
}
