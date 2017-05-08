<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasopUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casop_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPrivilegio')->unsigned();
            $table->integer('idCaso')->unsigned();
            $table->char('permiso');
            $table->string('idEmpresa');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idPrivilegio')->references('id')->on('privilegio_usuario');
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
        Schema::dropIfExists('casop_usuario');
    }
}
