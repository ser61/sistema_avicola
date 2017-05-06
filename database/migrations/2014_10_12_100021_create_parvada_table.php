<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParvadaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parvada', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidadPollos');
            $table->char('sexo');
            $table->tinyInteger('edad');
            $table->float('pesoPromedio');
            $table->string('caracteristicas');
            $table->integer('productividad');
            $table->string('tipo');
            $table->integer('mortalidad');
            $table->char('visible');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parvada');
    }
}
