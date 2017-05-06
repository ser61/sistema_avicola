<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_factura', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idFactura')->unsigned();
            $table->integer('idProducto')->unsigned();
            $table->integer('cantidad');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idFactura')->references('id')->on('factura');
            $table->foreign('idProducto')->references('id')->on('producto_venta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_factura');
    }
}
