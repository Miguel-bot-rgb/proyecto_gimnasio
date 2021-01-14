<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePruebasPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pruebas_pagos', function (Blueprint $table) {
            $table->integer('pruebas_id')->unique();
            $table->integer('pagos_id')->unique();
            $table->foreign('pruebas_id')->references('id')->on('pruebas')->onDelete('cascade');
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
        Schema::dropIfExists('pruebas_pagos');
    }
}
