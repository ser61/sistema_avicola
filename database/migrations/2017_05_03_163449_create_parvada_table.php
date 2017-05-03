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
        Schema::create('Parvada', function (Blueprint $table) {
            $table->increments('id');
            $table->int('cantidadPollos')->unsigned();
            $table->char('sexo');
            $table->int('edad')->unsigned();
            $table->float('pesoPromedio');
            $table->string('caracteristicas');
            $table->int('productividad')->nullable();
            $table->char('visible',1);
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
        Schema::dropIfExists('Parvada');
    }
}
