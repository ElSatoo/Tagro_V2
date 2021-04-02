<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiempoCargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiempo_carga', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tiempo'); //Primero en 30 segundos, y despues por segundos pero haciendo valores minutivos, ejemplo: 60 segundos = 1 minuto, en el select option seria <option value 60> 1 minuto  
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
        //
    }
}
