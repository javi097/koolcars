<?php

namespace Database\Seeders;

use App\Models\Carroceria;
use Illuminate\Database\Seeder;

class CarroceriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
            Carroceria::create([
                'nombre'=>'Compacto'
            ]);
            Carroceria::create([
                'nombre'=>'Familiar'
            ]);
            Carroceria::create([
                'nombre'=>'Coupe'
            ]);
            Carroceria::create([
                'nombre'=>'Monovolumen'
            ]);
            Carroceria::create([
                'nombre'=>'4x4 SUV'
            ]);

    }
}
