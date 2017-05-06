<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReporteHuevoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte_huevo', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->integer('mortalidad');
            $table->integer('idEmpleado')->unsigned();
            $table->integer('idLoteHuevoIncubable')->unsigned();
            $table->integer('idEtapaIncubacion')->unsigned();
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idEmpleado')->references('id')->on('persona');
            $table->foreign('idLoteHuevoIncubable')->references('id')->on('lote_huevo_incubable');
            $table->foreign('idEtapaIncubacion')->references('id')->on('etapa_incubacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reporte_huevo');
    }
}
