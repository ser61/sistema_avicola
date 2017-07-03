<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsumoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('marca')->nullable();
            $table->integer('cantidadTotal');
            $table->char('tipo')->nullable();
            $table->char('tipoInsumo');
            $table->integer('idUnidadMedida')->nullable()->unsigned();
            $table->integer('idFactura')->nullable()->unsigned();
            $table->string('idEmpresa');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idUnidadMedida')->references('id')->on('unidad_medida');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('insumo');
    }
}
