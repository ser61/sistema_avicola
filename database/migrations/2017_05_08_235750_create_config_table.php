<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('background');
            $table->string('logo');
            $table->string('font');
            $table->string('theme');
            $table->string('titulo');
            $table->integer('idSuperAdmin')->unsigned();
            $table->char('visible');
            $table->timestamps();

            $table->foreign('idSuperAdmin')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('config');
    }
}
