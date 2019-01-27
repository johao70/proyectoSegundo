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
            'pers_ci' => '1718842642',
            'nombre' => 'Johao Perlaza',
            'telefono' => '0978970998',
            'correo' => 'perlazajohao@gmail.com',
            'clave' => '123456',
        ]);
    }
}
