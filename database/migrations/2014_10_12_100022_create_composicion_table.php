<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComposicionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('composicion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idAlimento')->unsigned();
            $table->integer('idMateriaPrima')->unsigned();
            $table->float('peso');
            $table->string('idEmpresa');
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idAlimento')->references('id')->on('alimento');
            $table->foreign('idMateriaPrima')->references('id')->on('insumo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('composicion');
    }
}
