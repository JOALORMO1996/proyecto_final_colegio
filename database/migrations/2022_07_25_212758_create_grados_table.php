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
        Schema::create('grados', function (Blueprint $table) {
            $table->increments('id_grado');
            $table->string('grado');
            $table->integer('grupo')->unsigned();
            $table->integer('sede')->unsigned();
            $table->integer('estatus')->default(1);
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
        Schema::dropIfExists('grados');
    }
};
