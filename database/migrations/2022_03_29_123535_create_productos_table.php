<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {

             //borra en casacada
             $table->engine="InnoDB";
             //estructura de la tabla
             $table->bigIncrements('id');
             $table->bigInteger('id_catalogos')->unsigned();
             $table->string('nombre');
             $table->string('descripcion');
             $table->bigInteger('precio');
             $table->string('foto');
             $table->timestamps();
             //crear la realacion
             $table->foreign('id_catalogos')->references('id')->on('catalogos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
