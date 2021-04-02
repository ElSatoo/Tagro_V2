<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgregarSucursalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agregar_sucursals', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('empresa_id'); // foreign key
            $table->foreign('empresa_id')->references('id')->on('empresas')
            $table->unsignedInteger('region_id'); // foreign key
            $table->foreign('region_id')->references('id')->on('regions');
            $table->string('sucursal');
            $table->string('descripcion');
            $table->string('serial');
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
        Schema::dropIfExists('agregar_sucursals');
    }
}
