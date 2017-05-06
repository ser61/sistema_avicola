<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleOrdenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_orden', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idOrdenProduccion')->unsigned();
            $table->integer('idAlimento')->unsigned();
            $table->float('peso');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idOrdenProduccion')->references('id')->on('orden_produccion');
            $table->foreign('idAlimento')->references('id')->on('alimento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_orden');
    }
}
