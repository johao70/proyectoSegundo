<?php

use Illuminate\Database\Seeder;
use App\Estado;
use Faker\Factory as Faker;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado') -> insert([
            'nombre' => 'Disponible',
        ]);
    }
}
