<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->string('identificaion',12)->primary();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo')->nullable();
            $table->string('telefono')->nullable();
            $table->integer('sede')->unsigned();
            $table->integer('rol')->unsigned();
            $table->string('foto')->nullable();
            $table->string('estatus')->nullable();
            $table->foreign('sede')->references('id_sede')->on('sedes');
            $table->foreign('rol')->references('id_rol')->on('roles');

            
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
