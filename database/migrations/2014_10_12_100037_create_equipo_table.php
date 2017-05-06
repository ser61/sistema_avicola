<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('capacidad');
            $table->integer('idPlantaIncubacion')->unsigned();
            $table->char('tipo');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idPlantaIncubacion')->references('id')->on('infraestructura');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipo');
    }
}
