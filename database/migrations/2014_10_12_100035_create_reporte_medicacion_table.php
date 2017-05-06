<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReporteMedicacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte_medicacion', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechaMedicacion');
            $table->integer('idEmpleado')->unsigned();
            $table->integer('idParvada')->unsigned();
            $table->integer('idLoteHuevoIncubable')->unsigned();
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idEmpleado')->references('id')->on('persona');
            $table->foreign('idParvada')->references('id')->on('parvada');
            $table->foreign('idLoteHuevoIncubable')->references('id')->on('lote_huevo_incubable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reporte_medicacion');
    }
}
