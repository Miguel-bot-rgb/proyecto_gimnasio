<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecibosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->unsignedBigInteger('C_dni');
            $table->foreign('C_dni')->references('dni')->on('clientes')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('P_dni');
            $table->foreign('P_dni')->references('dni')->on('personas')->cascadeOnDelete()->cascadeOnUpdate();
            $table->float('monto');
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
        Schema::dropIfExists('recibos');
    }
}
