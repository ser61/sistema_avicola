<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroCompraTabla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrar_compra', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->string('observaciones');
            $table->integer('idEmpleado')->unsigned();
            $table->integer('idProveedor')->unsigned();
            $table->integer('idEmpresa');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idEmpleado')->references('id')->on('persona');
            $table->foreign('idProveedor')->references('id')->on('persona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_compra');
    }
}
