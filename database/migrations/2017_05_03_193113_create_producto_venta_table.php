<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Producto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->int('edad')->nullable();
            $table->char('sexo',1)->nullable();
            $table->int('pesoPromedio')->nullable();
            $table->int('productividad')->nullable();
            $table->string('caractaresticas')->nullable();
            $table->char('visible')->nullable();
            $table->char('tipo',1);
            $table->int('idCalidad');
            $table->int('idTipo');
            $table->int('idGranja');
            $table->timestamps();

            $table->foreign('idCalidad')->references('id')->on('calidads');
            $table->foreign('idTipo')->references('id')->on('tipos');
            $table->foreign('idGranja')->references('id')->on('granjas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Producto_Venta');
    }
}
