<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('telefono');
            $table->string('email')->unique(); // VARCHAR - UNIQUE, ya que es EMAIL
            $table->string('direccion_web'); 
            $table->string('direccion');
            $table->boolean('habilitar'); //esto es para la opcion de habilitar empresa (TRUE => HABILITAR | FALSE => DESHABILITAR)
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
        Schema::dropIfExists('empresas');
    }
}
