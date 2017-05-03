<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalidadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Calidad', function (Blueprint $table) {
            $table->increments('id');
            $table->varchar('nombre',100);
            $table->varchar('descripcion',100);
            $table->float('pesoIntervaloSuperior');
            $table->float('pesoIntervaloInferior');
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
        Schema::dropIfExists('Calidad');
    }
}
