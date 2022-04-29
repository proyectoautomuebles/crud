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
        Schema::create('comedores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_comedores')->unsigned();
            $table->string('nombre');
            $table->string('descripcion');
            $table->bigInteger('precio');
            $table->string('foto');
            $table->timestamps();
            $table->foreign('id_comedores')->references('id')->on('catalogos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comedores');
    }
};
