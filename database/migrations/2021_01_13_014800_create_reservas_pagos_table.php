<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas_pagos', function (Blueprint $table) {
            $table->integer('reservas_id')->unique();
            $table->integer('pagos_id')->unique();
            $table->foreign('reservas_id')->references('id')->on('reservads')->onDelete('cascade');
            $table->foreign('pagos_id')->references('id')->on('pagos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas_pagos');
    }
}
