<?php

use Illuminate\Database\Seeder;
use App\Tipo_mesa;
use Faker\Factory as Faker;

class Tipo_mesaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_mesa') -> insert([
            'descripcion' => 'Mesa Familiar Moderna',
            'capacidad' => '6',
        ]);
    }
}
