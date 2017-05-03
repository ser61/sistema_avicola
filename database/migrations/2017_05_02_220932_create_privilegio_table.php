<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivilegioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privilegio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCaso_Uso')->unsigned();
            $table->integer('idCargo')->unsigned();
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idCaso_Uso')->references('id')->on('caso_uso');
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
        Schema::dropIfExists('privilegio');
    }
}
