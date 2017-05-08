<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleMedicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_medicacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idMedicamento')->unsigned();
            $table->integer('idReporteMedicacion')->unsigned();
            $table->float('dosis');
            $table->string('viaDeAplicacion');
            $table->string('idEmpresa');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idMedicamento')->references('id')->on('insumo');
            $table->foreign('idReporteMedicacion')->references('id')->on('reporte_medicacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_medicacion');
    }
}
