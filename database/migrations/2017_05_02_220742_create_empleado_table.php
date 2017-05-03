<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleado', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPersona')->unsigned();
            $table->date('fechaIngreso')->nullable();
            $table->date('fechaSalida')->nullable();
            $table->integer('idCargo')->unsigned();
            $table->integer('idGranja')->unsigned();
            $table->char('visible',1);
            $table->timestamps();

            $table->foreign('idPersona')->references('id')->on('persona');
            $table->foreign('idCargo')->references('id')->on('cargo');
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
        Schema::dropIfExists('empleado');
    }
}
