<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_reserva', function (Blueprint $table) {
            $table->increments('detalle_id');
            $table->integer('mesa_id');
            $table->foreign('mesa_id')->references('mesa_id')->on('mesa');
            $table->integer('reserva_id');
            $table->foreign('reserva_id')->references('reserva_id')->on('reserva');
            $table->integer('numerousuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_reserva');
    }
}
