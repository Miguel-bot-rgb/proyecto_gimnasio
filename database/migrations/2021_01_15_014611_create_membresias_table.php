<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembresiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membresias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',40);
            $table->string('descripcion',40);
            $table->float('precio');
            $table->unsignedBigInteger('entrenamientos_id')->unique();
            $table->foreign('entrenamientos_id')->references('id')->on('entrenamientos')->onDelete('cascade');
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
        Schema::dropIfExists('membresias');
    }
}
