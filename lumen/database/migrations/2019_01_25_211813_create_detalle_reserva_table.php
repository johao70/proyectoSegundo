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
            $table->increments('id');
            $table->integer('mesa_id');
            $table->foreign('mesa_id')->references('id')->on('mesa');
            $table->integer('reserva_id');
            $table->foreign('reserva_id')->references('id')->on('reserva');
            $table->string('numeroUsuarios');
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
        Schema::dropIfExists('detalle_reserva');
    }
}
