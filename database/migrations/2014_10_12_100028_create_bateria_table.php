<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bateria', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('capacidad');
            $table->integer('idGalpon')->unsigned();
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idGalpon')->references('id')->on('infraestructura');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bateria');
    }
}
