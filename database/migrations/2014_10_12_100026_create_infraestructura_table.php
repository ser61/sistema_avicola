<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfraestructuraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infraestructura', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('capacidad');
            $table->string('estado');
            $table->char('tipo');
            $table->integer('idGranja')->unsigned();
            $table->integer('idEmpresa')->unsigned();
            //Planta De Incubacion
            $table->integer('cantidadHuevosAlmacenados')->nullable();

            $table->char('visible');
            $table->timestamps();

            $table->foreign('idGranja')->references('id')->on('granja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('infraestructura');
    }
}
