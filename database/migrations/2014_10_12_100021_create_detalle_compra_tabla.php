<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleCompraTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_compra', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idRegistrarCompra')->unsigned();
            $table->integer('idInsumo')->unsigned();
            $table->integer('cantidad');
            $table->float('precio');
            $table->integer('idEmpresa');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idRegistrarCompra')->references('id')->on('registrar_compra');
            $table->foreign('idInsumo')->references('id')->on('insumo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_compra');
    }
}
