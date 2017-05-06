<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivilegioCargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privilegio_cargo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCargo')->unsigned();
            $table->integer('idModulo')->unsigned();
            $table->char('permiso');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idCargo')->references('id')->on('cargo');
            $table->foreign('idModulo')->references('id')->on('modulo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('privilegio_cargo');
    }
}
