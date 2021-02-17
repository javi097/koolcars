<?php

namespace Database\Seeders;

use App\Models\Marca;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marca::create([

            'nombre'=>'Alfa Romeo',
            'logo'=>'img/logoMarca/logo_alfa.jpg'
        ]);

        Marca::create([

            'nombre'=>'Audi',
            'logo'=>'img/logoMarca/logo_audi.jpg'
        ]);

        Marca::create([

            'nombre'=>'BMW',
            'logo'=>'img/logoMarca/logo_bmw.jpg'
        ]);

        Marca::create([

            'nombre'=>'Citroën',
            'logo'=>'img/logoMarca/logo_citroen.jpg'
        ]);

        Marca::create([

            'nombre'=>'Dacia',
            'logo'=>'img/logoMarca/logo_dacia.jpg'
        ]);

        Marca::create([

            'nombre'=>'Fiat',
            'logo'=>'img/logoMarca/logo_fiat.jpg'
        ]);

        Marca::create([

            'nombre'=>'Ford',
            'logo'=>'img/logoMarca/logo_ford.jpg'
        ]);

        Marca::create([

            'nombre'=>'Honda',
            'logo'=>'img/logoMarca/logo_honda.jpg'
        ]);

        Marca::create([

            'nombre'=>'Hyundai',
            'logo'=>'img/logoMarca/logo_hyundai.jpg'
        ]);

        Marca::create([

            'nombre'=>'Kia',
            'logo'=>'img/logoMarca/logo_kia.jpg'
        ]);

        Marca::create([

            'nombre'=>'Mazda',
            'logo'=>'img/logoMarca/logo_mercedes.jpg'
        ]);

        Marca::create([

            'nombre'=>'Mini',
            'logo'=>'img/logoMarca/logo_mini.jpg'
        ]);

        Marca::create([

            'nombre'=>'Mitsubishi',
            'logo'=>'img/logoMarca/logo_mitsubishi.jpg'
        ]);

        Marca::create([

            'nombre'=>'Nissan',
            'logo'=>'img/logoMarca/logo_nissan.jpg'
        ]);

        Marca::create([

            'nombre'=>'Opel',
            'logo'=>'img/logoMarca/logo_opel.jpg'
        ]);

        Marca::create([

            'nombre'=>'Peugeot',
            'logo'=>'img/logoMarca/logo_peugeot.jpg'
        ]);

        Marca::create([

            'nombre'=>'Renault',
            'logo'=>'img/logoMarca/logo_renault.jpg'
        ]);

        Marca::create([

            'nombre'=>'Seat',
            'logo'=>'img/logoMarca/logo_seat.jpg'
        ]);

        Marca::create([

            'nombre'=>'Skoda',
            'logo'=>'img/logoMarca/logo_skoda.jpg'
        ]);

        Marca::create([

            'nombre'=>'Suzuki',
            'logo'=>'img/logoMarca/logo_suzuki.jpg'
        ]);

        Marca::create([

            'nombre'=>'Toyota',
            'logo'=>'img/logoMarca/logo_toyota.jpg'
        ]);

        Marca::create([

            'nombre'=>'Volkswagen',
            'logo'=>'img/logoMarca/logo_volkswagen.jpg'
        ]);

        Marca::create([

            'nombre'=>'Volvo',
            'logo'=>'img/logoMarca/logo_volvo.jpg'
        ]);
    }
}
