<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

class CreateDiciplinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diciplinas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre,45');
            $table->float('costo');
            //llave foranea
            $table->unsignedBigInteger('seccions_id');
            $table->foreign('seccions_id')->references('id')->on('seccions')
                    ->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('diciplinas');
    }
}
