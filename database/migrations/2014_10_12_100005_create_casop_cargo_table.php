<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasopCargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casop_cargo', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPrivilegio')->unsigned();
            $table->integer('idCaso')->unsigned();
            $table->char('permiso');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idPrivilegio')->references('id')->on('privilegio_cargo');
            $table->foreign('idCaso')->references('id')->on('caso_uso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casop_cargo');
    }
}
