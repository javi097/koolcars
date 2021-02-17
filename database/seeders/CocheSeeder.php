<?php

namespace Database\Seeders;

use App\Models\Coche;
use Illuminate\Database\Seeder;

class CocheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ALFA ROMEO GIULIA
        
        Coche::create([
            'modelo'=>'ALFA ROMEO Giulia 2.2 Diesel 118kW 160CV Super RWD',
            'marcas_id'=>24,
            'carroceria_id'=>9,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>160,
            'precio'=>44.750,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulia.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulia 2.2 Diesel 118kW 160CV Sprint RWD',
            'marcas_id'=>24,
            'carroceria_id'=>9,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>160,
            'precio'=>49.500,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulia.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulia 2.2 Diesel 140kW 190CV Sprint RWD',
            'marcas_id'=>24,
            'carroceria_id'=>9,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>190,
            'precio'=>53.050,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulia.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulia 2.0 Gasolina 147kW 200CV Sprint RWD',
            'marcas_id'=>24,
            'carroceria_id'=>9,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>200,
            'precio'=>54.560,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulia.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulia 2.2 Diesel 140kW 190CV TI RWD',
            'marcas_id'=>24,
            'carroceria_id'=>9,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>190,
            'precio'=>54.750,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulia.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulia 2.0 Gasolina 147kW 200CV TI RWD',
            'marcas_id'=>24,
            'carroceria_id'=>9,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>200,
            'precio'=>55.850,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulia.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulia 2.2 Diesel 154kW 210CV Veloce Q4',
            'marcas_id'=>24,
            'carroceria_id'=>9,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>210,
            'precio'=>57.945,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulia.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulia 2.0 Gasolina 206kW 280CV Veloce Q4',
            'marcas_id'=>24,
            'carroceria_id'=>9,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>280,
            'precio'=>63.290,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulia.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulia 2.9T V6 375kW 510CV Quadrifoglio AT',
            'marcas_id'=>24,
            'carroceria_id'=>9,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>510,
            'precio'=>98.150,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulia.jpg'
        ]);

        //ALFA ROMEO GIULIETTA

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulietta 1.4 TB 88kW 120CV Super',
            'marcas_id'=>24,
            'carroceria_id'=>7,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>120,
            'precio'=>23.995,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulietta.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulietta 1.6 JTD 88kW 120CV Super',
            'marcas_id'=>24,
            'carroceria_id'=>7,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>120,
            'precio'=>24.995,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulietta.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulietta 1.4 TB 88kW 120CV Sport',
            'marcas_id'=>24,
            'carroceria_id'=>7,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>120,
            'precio'=>24.995,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulietta.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulietta 1.6 JTD 88kW 120CV Sport',
            'marcas_id'=>24,
            'carroceria_id'=>7,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>120,
            'precio'=>25.955,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulietta.jpg'
        ]);

        //ALFA ROMEO STELVIO

        Coche::create([
            'modelo'=>'ALFA ROMEO Stelvio 2.2 Diesel 140kW 190CV Super RWD',
            'marcas_id'=>24,
            'carroceria_id'=>11,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>190,
            'precio'=>49.995,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/stelvio.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Stelvio 2.2 Diesel 140kW 190CV Sprint RWD',
            'marcas_id'=>24,
            'carroceria_id'=>11,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>190,
            'precio'=>54.295,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/stelvio.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Stelvio 2.0 Gasolina 147kW 200CV Sprint Q4',
            'marcas_id'=>24,
            'carroceria_id'=>11,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>200,
            'precio'=>59.245,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/stelvio.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Stelvio 2.2 Diesel 140kW 190CV Sprint Q4',
            'marcas_id'=>24,
            'carroceria_id'=>11,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>190,
            'precio'=>59.645,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/stelvio.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Stelvio 2.2 Diesel 154kW 210CV Veloce Q4',
            'marcas_id'=>24,
            'carroceria_id'=>11,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>210,
            'precio'=>64.575,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/stelvio.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Stelvio 2.2 Diesel 154kW 210CV TI Q4',
            'marcas_id'=>24,
            'carroceria_id'=>11,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>210,
            'precio'=>66.150,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/stelvio.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Stelvio 2.0 Gasolina 206kW 280CV Veloce Q4',
            'marcas_id'=>24,
            'carroceria_id'=>11,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>280,
            'precio'=>68.215,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/stelvio.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Stelvio 2.0 Gasolina 206kW 280CV TI Q4',
            'marcas_id'=>24,
            'carroceria_id'=>11,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>280,
            'precio'=>69.790,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/stelvio.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Stelvio 2.9 Gasolina 375kW 510CV Quadrifogl Q4',
            'marcas_id'=>24,
            'carroceria_id'=>11,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>510,
            'precio'=>113.750,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/stelvio.jpg'
        ]);
        //---------------------------------------------------------------
    }
}
