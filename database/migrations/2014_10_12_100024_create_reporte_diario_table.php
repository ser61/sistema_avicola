<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReporteDiarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte_diario', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->integer('mortalidad');
            $table->integer('cantidadHuevos');
            $table->float('pesoPromedio');
            $table->string('observaciones');
            $table->integer('idDietaAlimenticia')->unsigned();
            $table->integer('idEmpleado')->unsigned();
            $table->integer('idEtapa')->unsigned();
            $table->integer('idParvada')->unsigned();
            $table->string('idEmpresa');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idDietaAlimenticia')->references('id')->on('dieta_alimenticia');
            $table->foreign('idEmpleado')->references('id')->on('persona');
            $table->foreign('idEtapa')->references('id')->on('etapa');
            $table->foreign('idParvada')->references('id')->on('parvada');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reporte_diario');
    }
}
