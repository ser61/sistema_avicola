<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelefonoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Telefono', function (Blueprint $table) {
            $table->increments('id');
            $table->int('numero')->unsigned();
            $table->int('idPersona');
            $table->char('visible');
            $table->timestamps();
          
            $table->foreign('idPersona')->references('id')->on('Persona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Telefono');
    }
}
