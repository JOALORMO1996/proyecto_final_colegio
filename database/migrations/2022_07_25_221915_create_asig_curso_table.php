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
        Schema::create('asig_curso', function (Blueprint $table) {
            $table->increments('id_asig_curso');
            $table->integer('grado')->unsigned();
            $table->integer('grupo')->unsigned();
            $table->integer('sede')->unsigned();
            $table->string('docente');
            $table->integer('asignatura')->unsigned();
            $table->integer('ihs');
            $table->integer('estatus')->default(1);
            $table->foreign('grado')->references('id_grado')->on('grados');
            $table->foreign('grupo')->references('id_grupo')->on('grupos');
            $table->foreign('sede')->references('id_sede')->on('sedes');
            $table->foreign('docente')->references('identificaion')->on('docentes');
            $table->foreign('asignatura')->references('id_asignatura')->on('asignaturas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asig_curso');
    }
};
