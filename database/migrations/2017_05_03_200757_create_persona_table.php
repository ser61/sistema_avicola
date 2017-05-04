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
        Schema::create('Persona', function (Blueprint $table) {
            $table->increments('id');
            $table->int('nit/ci')->unsigned();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            //Proveedor
            $table->string('email');
            $table->string('empresa');
            //Cliente
            $table->date('fechaIngreso');
            $table->date('fechaSalida');

            $table->char('tipo',1);
            $table->char('visible',1);
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
        Schema::dropIfExists('Persona');
    }
}
