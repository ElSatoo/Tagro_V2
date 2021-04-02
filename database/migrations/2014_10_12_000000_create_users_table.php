<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id'); //INTEGER UNSIGNED - AUTOINCREMENT
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('cedula');
            $table->string('telefono');
            $table->string('email')->unique(); // VARCHAR - UNIQUE
            $table->unsignedInteger('tipo_usuario_id'); // variable para foreign key
            $table->foreign('tipo_usuario_id')->references('id')->on('tipo_usuarios');
            $table->string('name')->unique(); // VARCHAR - UNIQUE - USERNAME
            $table->string('password');
            $table->boolean('habilitar'); //esto es para la opcion de habilitar empresa (TRUE => HABILITAR | FALSE => DESHABILITAR)
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
