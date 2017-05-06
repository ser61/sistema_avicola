<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleSanitizacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_sanitizacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idProcesoSanitario')->unsigned();
            $table->integer('idRegistroSanitizacion')->unsigned();
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idProcesoSanitario')->references('id')->on('proceso_sanitario');
            $table->foreign('idRegistroSanitizacion')->references('id')->on('registro_sanitizacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_sanitizacion');
    }
}
