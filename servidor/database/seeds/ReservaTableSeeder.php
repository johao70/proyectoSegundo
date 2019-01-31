<?php

use Illuminate\Database\Seeder;
use App\Reserva;
use Faker\Factory as Faker;

class ReservaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reserva') -> insert([
            'pers_ci' => '123456789',
            'fecha' => '15-05-2018',
        ]);
    }
}
