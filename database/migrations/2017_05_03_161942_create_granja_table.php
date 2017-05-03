<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGranjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Granja', function (Blueprint $table) {
            $table->increments('id');
            $table->varchar('ubicacion',100);
            $table->char('tipo');
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
        Schema::table('Granja', function (Blueprint $table) {
            //
        });
    }
}
