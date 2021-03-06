<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accion', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->time('hora');
            $table->string('accion');
            $table->string('tabla')->nullable();
            $table->integer('idTupla')->nullable();
            $table->integer('idBitacora')->unsigned();
            $table->string('idEmpresa');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idBitacora')->references('id')->on('bitacora');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accion');
    }
}
