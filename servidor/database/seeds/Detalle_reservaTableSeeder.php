<?php

use Illuminate\Database\Seeder;
use App\Detalle_reserva;
use Faker\Factory as Faker;

class Detalle_reservaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detalle_reserva') -> insert([
            'reserva_id' => '1',
            'mesa_id' => '1',
            'numerousuarios' => '5',
        ]);
    }
}
