<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            // $table->id();
            //llave primaria
            $table->integer('dni')->unique();
            $table->primary('dni');
           //------------------------------------------------------------------------------------------------>
            $table->string('nombre',45);
            $table->string('apellido_p',45)->nullable();
            $table->string('apellido_m',45)->nullable();
            $table->integer('edad');
            $table->string('sexo',1);
            $table->string('telefono',15)->nullable();
            $table->string('correo',45)->unique();
            // llave foranea
            $table->unsignedBigInteger('direccion_id')->unique();
            $table->foreign('direccion_id')->references('id')->on('direccions')
                                          ->cascadeOnDelete()->cascadeOnUpdate();
            //------------------------------------------------------------------------------------------------>
            $table->string('cargo',45)->nullable();
            $table->float('sueldo')->nullable();
            $table->tinyInteger('tipo_A')->nullable();
            $table->tinyInteger('tipo_E')->nullable();

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
        Schema::dropIfExists('personas');
    }
}
