<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleAlimentacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_alimentacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idAlimento')->unsigned();
            $table->integer('idDietaAlimenticia')->unsigned();
            $table->float('cantidadAlimento');
            $table->string('idEmpresa');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idAlimento')->references('id')->on('alimento');
            $table->foreign('idDietaAlimenticia')->references('id')->on('dieta_alimenticia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_alimentacion');
    }
}
