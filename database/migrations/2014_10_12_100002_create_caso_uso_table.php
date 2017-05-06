<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasoUsoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caso_uso', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idModulo')->unsigned();
            $table->string('nombre');
            $table->char('visible');
            $table->timestamps();

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
        Schema::dropIfExists('caso_uso');
    }
}
