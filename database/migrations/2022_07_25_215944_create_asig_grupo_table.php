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
        Schema::create('asig_grupo', function (Blueprint $table) {
            $table->increments('id_asig_grupo');
            $table->integer('grado')->unsigned();
            $table->integer('grupo')->unsigned();
            $table->integer('sede')->unsigned();
            $table->string('docente');
            $table->integer('estatus')->default(1);
            $table->foreign('grado')->references('id_grado')->on('grados');
            $table->foreign('grupo')->references('id_grupo')->on('grupos');
            $table->foreign('sede')->references('id_sede')->on('sedes');
            $table->foreign('docente')->references('identificaion')->on('docentes');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asig_grupo');
    }
};
