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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->string('id_estudiante')->primary();
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fecha_nacimiento');
            $table->string('sexo');
            $table->integer('grado')->unsigned();
            $table->integer('grupo')->unsigned();
            $table->integer('sede')->unsigned();
            $table->string('foto');
            $table->integer('estatus')->default(1);
            $table->foreign('grado')->references('id_grado')->on('grados');
            $table->foreign('grupo')->references('id_grupo')->on('grupos');
            $table->foreign('sede')->references('id_sede')->on('sedes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
};
