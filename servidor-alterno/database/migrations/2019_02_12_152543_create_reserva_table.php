<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->increments('id_reserva');
            $table->string('pers_ci')->unsigned();            
            $table->foreign('pers_ci')->references('pers_ci')->on('person');
            $table->integer('id_mesa')->unsigned();            
            $table->foreign('id_mesa')->references('id_mesa')->on('mesa');
            $table->integer('id_horario')->unsigned();            
            $table->foreign('id_horario')->references('id_horario')->on('horario');            
            $table->Integer('numeropersonas')->nullable($value = true);
            $table->Date('fecha')->nullable($value = true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserva');
    }
}