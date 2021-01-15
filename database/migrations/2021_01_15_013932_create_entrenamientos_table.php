<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrenamientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrenamientos', function (Blueprint $table) {
            $table->id();
            $table->text('observaciones');
            $table->string('estado');
            $table->unsignedBigInteger('servicios_id')->unique();
            $table->unsignedBigInteger('secciones_id')->unique();
            $table->foreign('servicios_id')->references('id')->on('servicios')->onDelete('cascade');
            $table->foreign('secciones_id')->references('id')->on('secciones')->onDelete('cascade');
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
        Schema::dropIfExists('entrenamientos');
    }
}
