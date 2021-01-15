<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePruebaPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prueba_pagos', function (Blueprint $table) {
            $table->unsignedBigInteger('prueba_id')->unique();
            $table->unsignedBigInteger('pago_id')->unique();
            $table->foreign('prueba_id')->references('id')->on('pruebas')->onDelete('cascade');
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
        Schema::dropIfExists('prueba_pagos');
    }
}
