<?php

use Illuminate\Database\Seeder;
use App\Mesa;
use Faker\Factory as Faker;

class MesaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mesa') -> insert([
            'tipo_id' => '1',
            'estado_id' => '1',
        ]);
    }
}
