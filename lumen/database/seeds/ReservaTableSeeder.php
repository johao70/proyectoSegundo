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
            'pers_ci' => '1718842642',
            'fecha' => '26-01-2019',
        ]);
    }
}
