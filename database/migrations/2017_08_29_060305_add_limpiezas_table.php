<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLimpiezasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('limpiezas', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('removerPolvo')->nullable();
            $table->tinyInteger('conexiones')->nullable();
            $table->tinyInteger('limpiarCarcaza')->nullable();
            $table->tinyInteger('limpiarTeclado')->nullable();
            $table->tinyInteger('limpiarMonitor')->nullable();
            $table->tinyInteger('limpiarMouse')->nullable();
            $table->tinyInteger('conectarCables')->nullable();
            $table->timestamps();
        });

        Schema::create('mantenimiento_limpieza', function(Blueprint $table){

            $table->increments('id');
            $table->integer('idMantenimiento')->unsigned();
            $table->integer('idLimpieza')->unsigned();

            $table->foreign('idMantenimiento')->references('id')->on('mantenimientos');
            $table->foreign('idLimpieza')->references('id')->on('limpiezas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('limpiezas');
    }
}
