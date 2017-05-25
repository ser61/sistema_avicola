<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoteHuevoIncubableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lote_huevo_incubable', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->integer('idPlantaIncubacion')->unsigned();
            $table->string('idEmpresa');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idPlantaIncubacion')->references('id')->on('infraestructura');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lote_huevo_incubable');
    }
}
