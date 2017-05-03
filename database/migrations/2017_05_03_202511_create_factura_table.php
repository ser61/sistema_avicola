<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Factura', function (Blueprint $table) {
            $table->increments('id');
            $table->int('nit')->unsigned();
            $table->string('nombre');
            $table->date('fecha');
            $table->float('monto');
            $table->int('idCliente');
            $table->char('visible',1);
            $table->timestamps();

            $table->foreign('idCliente')->references('id')->on('Persona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Factura');
    }
}
