<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngresoHuevoIncubableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingreso_huevo_incubable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idReporteDiario')->unsigned();
            $table->integer('idPlantaIncubacion')->unsigned();
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idReporteDiario')->references('id')->on('reporte_diario');
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
        Schema::dropIfExists('ingreso_huevo_incubable');
    }
}
