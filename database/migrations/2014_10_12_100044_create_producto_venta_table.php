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
        Schema::create('producto_venta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen');
            $table->integer('stock');
            $table->float('precioUnitario');
            //Huevo
            $table->integer('idCategoria')->unsigned()->nullable();
            //Pollo
            $table->tinyInteger('edad')->nullable();
            $table->char('sexo')->nullable();
            $table->float('pesoPromedio')->nullable();
            $table->integer('productividad')->nullable();
            $table->string('caracteristicas')->nullable();
            $table->integer('idTipo')->unsigned()->nullable();

            $table->char('tipo');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idCategoria')->references('id')->on('categoria');
            $table->foreign('idTipo')->references('id')->on('tipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_venta');
    }
}
