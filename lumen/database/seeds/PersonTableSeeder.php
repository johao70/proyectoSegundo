<?php

use Illuminate\Database\Seeder;
use App\Person;
use Faker\Factory as Faker;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('person') -> insert([
            'pers_ci' => '123456789',
            'nombre' => 'Juan Rojas',
            'telefono' => '0987456321',
            'correo' => 'rojasjuan@gmail.com',
            'clave' => '123roger',
        ]);
    }
}
