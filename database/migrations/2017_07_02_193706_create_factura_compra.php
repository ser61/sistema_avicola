<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_compra', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->float('montoTotal');
            $table->integer('idEmpleado');
            $table->integer('idProveedor');
            $table->integer('idEmpresa');
            $table->char('visible');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura_compra');
    }
}
