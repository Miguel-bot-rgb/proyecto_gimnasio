<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservads', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_inicio');
            $table->text('estado');
            $table->integer('cliente_id')->unique();
            $table->integer('entros_ho_id')->unique();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('entros_ho_id')->references('id')->on('entrenamineto_horarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservads');
    }
}
