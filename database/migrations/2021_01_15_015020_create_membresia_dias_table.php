<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembresiaDiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membresia_dias', function (Blueprint $table) {
            $table->id();
            $table->integer('dias_semanas');
            $table->unsignedBigInteger('membresias_id')->unique();
            $table->foreign('membresias_id')->references('id')->on('membresias')->onDelete('cascade');
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
        Schema::dropIfExists('membresia_dias');
    }
}
