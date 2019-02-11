<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person', function (Blueprint $table) {
            $table->increments('id');                    
            $table->string('nombre',150)->nullable($value = true);
            $table->string('pers_ci',20)->nullable($value = true);
            $table->string('telefono',10)->nullable($value = true);
            $table->string('correo',255)->nullable($value = true);
            $table->string('clave',20)->nullable($value = true);            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person');
    }
}
