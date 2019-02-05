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
            $table -> increments('reserva_id');            
            $table -> integer('id')->unsigned();
            $table -> foreign('id')->references('id')->on('person');
            $table -> integer('horario_id')->unsigned();
            $table -> foreign('horario_id')->references('horario_id')->on('horario');
            $table -> date('fecha');
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
