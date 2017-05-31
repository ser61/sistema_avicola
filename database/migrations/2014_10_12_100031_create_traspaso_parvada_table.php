<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraspasoParvadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traspaso_parvada', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->integer('cantidad');
            $table->integer('idGalpon')->unsigned();
            $table->integer('idParvada')->unsigned();
            $table->integer('idEtapa')->unsigned();
            $table->string('idEmpresa');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idGalpon')->references('id')->on('infraestructura');
            $table->foreign('idParvada')->references('id')->on('parvada');
            $table->foreign('idEtapa')->references('id')->on('etapa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traspaso_parvada');
    }
}
