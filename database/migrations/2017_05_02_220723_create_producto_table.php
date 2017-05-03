<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('edad')->nullable();
            $table->char('sexo',1)->nullable();
            $table->integer('pesoPromedio')->nullable();
            $table->integer('productividad')->nullable();
            $table->string('caractaresticas')->nullable();
            $table->char('visible',1);
            $table->char('tipo',1);
            $table->integer('idCalidad')->unsigned();
            $table->integer('idTipo')->unsigned();
            $table->integer('idGranja')->unsigned();
            $table->timestamps();

            $table->foreign('idCalidad')->references('id')->on('calidad')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('idTipo')->references('id')->on('tipo');
            $table->foreign('idGranja')->references('id')->on('granja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
