<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva_pagos', function (Blueprint $table) {
            $table->unsignedBigInteger('reserva_id')->unique();
            $table->unsignedBigInteger('pago_id')->unique();
            $table->foreign('reserva_id')->references('id')->on('reservas')->onDelete('cascade');
            $table->foreign('pago_id')->references('id')->on('pagos')->onDelete('cascade');
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
        Schema::dropIfExists('reserva_pagos');
    }
}
