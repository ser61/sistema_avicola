<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_producto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idProductoSanitario')->unsigned();
            $table->integer('idProcesoSanitario')->unsigned();
            $table->integer('cantidad');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idProductoSanitario')->references('id')->on('insumo');
            $table->foreign('idProcesoSanitario')->references('id')->on('proceso_sanitario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_producto');
    }
}
