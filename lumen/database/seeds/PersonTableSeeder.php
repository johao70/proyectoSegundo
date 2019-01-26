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
            'pers_ci' => '171884264-2',
            'nombre' => 'Johao Perlaza',
            'telefono' => '0978970998',
            'correo' => 'perlazajohao@gmail.com',
            'clave' => '123456',
        ]);
        // $faker = Faker::create();
        // $personDatos = array(
        //     "171884264-2",
        //     "Johao Perlaza",
        //     "0978970998",
        //     "perlazajohao@gmail.com",
        //     "12345",
        // );

        // foreach($personDatos as $personDato){
        //     Person::create([
        //         'pers_ci' => $faker -> text(20),
        //         'nombre' => $faker -> text(255),
        //         'telefono' => $faker -> text(255),
        //         'correo' => $faker -> text(255),
        //         'clave' => $faker -> text(255),
        //     ]);
        // }
    }
}
