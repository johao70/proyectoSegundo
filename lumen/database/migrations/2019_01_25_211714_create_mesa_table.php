<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_id');
            $table->foreign('tipo_id')->references('id')->on('tipo_mesa');
            $table->integer('estado_id');
            $table->foreign('estado_id')->references('id')->on('estado');
            $table->string('nombre');
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
        Schema::dropIfExists('mesa');
    }
}
