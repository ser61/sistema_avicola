<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroSanitizacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_sanitizacion', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->integer('idInfraestructura')->unsigned();
            $table->integer('idEmpleado')->unsigned();
            $table->string('idEmpresa');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idInfraestructura')->references('id')->on('infraestructura');
            $table->foreign('idEmpleado')->references('id')->on('persona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_sanitizacion');
    }
}
