<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PersonTableSeeder::class);
        $this->call(ReservaTableSeeder::class);
        $this->call(Detalle_reservaTableSeeder::class);
        $this->call(MesaTableSeeder::class);
        $this->call(Tipo_mesaTableSeeder::class);
        $this->call(EstadoTableSeeder::class);
    }
}
