<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tarea::create(['nombre'=> 'Instalacion']);
        Tarea::create(['nombre'=> 'Desconexion']);
        Tarea::create(['nombre'=> 'Service']);
        Tarea::create(['nombre'=> 'Reconexion']);
    }
}
