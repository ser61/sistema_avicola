<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ci')->unsigned();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            //Proveedor
            $table->string('email')->nullable();
            $table->string('nombreEmpresa')->nullable();
            //Empleado
            $table->date('fechaNacimiento')->nullable();
            $table->date('fechaIngreso')->nullable();
            $table->string('foto')->nullable();
            $table->integer('idCargo')->nullable()->unsigned();
            //Cliente

            $table->char('tipo');
            $table->string('idEmpresa');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idCargo')->references('id')->on('cargo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
}
