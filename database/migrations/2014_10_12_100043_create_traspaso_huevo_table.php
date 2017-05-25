<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraspasoHuevoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traspaso_huevo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idLoteHuevoIncubable')->unsigned();
            $table->integer('idEtapaIncubacion')->unsigned();
            $table->integer('cantidad');
            $table->date('fecha');
            $table->integer('idEquipo')->unsigned();
            $table->string('idEmpresa');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idLoteHuevoIncubable')->references('id')->on('lote_huevo_incubable');
            $table->foreign('idEtapaIncubacion')->references('id')->on('etapa_incubacion');
            $table->foreign('idEquipo')->references('id')->on('equipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('traspaso_huevo');
    }
}
