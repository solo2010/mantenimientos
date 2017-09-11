<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVerificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verificaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('sistema')->nullable();
            $table->tinyInteger('discos')->nullable();
            $table->tinyInteger('dvdrom')->nullable();
            $table->tinyInteger('monitor')->nullable();
            $table->tinyInteger('mouse')->nullable();
            $table->tinyInteger('teclado')->nullable();
            $table->tinyInteger('tarjetaRed')->nullable();
            $table->tinyInteger('temporales')->nullable();
            $table->timestamps();
        });

        Schema::create('mantenimiento_verificacion', function(Blueprint $table){

            $table->increments('id');
            $table->integer('idVerificacion')->unsigned();
            $table->integer('idMantenimiento')->unsigned();

            $table->foreign('idVerificacion')->references('id')->on('verificaciones');
            $table->foreign('idMantenimiento')->references('id')->on('mantenimientos');
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verificaciones');
    }
}
