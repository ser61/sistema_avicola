<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivilegiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Privilegio', function (Blueprint $table) {
            $table->increments('id');
            $table->int('idCaso_Uso');
            $table->int('idCargo');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idCaso_Uso')->references('id')->on('Caso_Uso');
            $table->foreign('idCargo')->references('id')->on('Cargo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Privilegio');
    }
}
