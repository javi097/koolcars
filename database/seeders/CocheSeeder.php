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
            'modelo'=>'ALFA ROMEO Giulia 2.2 Diesel 58kW 160CV Super RWD',
            'nombre'=>'Giulia',
            'marca_id'=>1,
            'carroceria_id'=>3,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>160,
            'precio'=>44.750,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulia.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulia 2.2 Diesel 58kW 160CV Sprint RWD',
            'nombre'=>'Giulia',
            'marca_id'=>1,
            'carroceria_id'=>3,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>160,
            'precio'=>49.500,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulia.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulia 2.2 Diesel 140kW 190CV Sprint RWD',
            'nombre'=>'Giulia',
            'marca_id'=>1,
            'carroceria_id'=>3,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>190,
            'precio'=>53.050,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulia.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulia 2.0 Gasolina 147kW 200CV Sprint RWD',
            'nombre'=>'Giulia',
            'marca_id'=>1,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>200,
            'precio'=>54.560,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulia.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulia 2.2 Diesel 140kW 190CV TI RWD',
            'nombre'=>'Giulia',
            'marca_id'=>1,
            'carroceria_id'=>3,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>190,
            'precio'=>54.750,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulia.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulia 2.0 Gasolina 147kW 200CV TI RWD',
            'nombre'=>'Giulia',
            'marca_id'=>1,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>200,
            'precio'=>55.850,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulia.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulia 2.2 Diesel 154kW 210CV Veloce Q4',
            'nombre'=>'Giulia',
            'marca_id'=>1,
            'carroceria_id'=>3,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>210,
            'precio'=>57.945,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulia.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulia 2.0 Gasolina 206kW 280CV Veloce Q4',
            'nombre'=>'Giulia',
            'marca_id'=>1,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>280,
            'precio'=>63.290,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulia.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulia 2.9T V6 375kW 510CV Quadrifoglio AT',
            'nombre'=>'Giulia',
            'marca_id'=>1,
            'carroceria_id'=>3,
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
            'nombre'=>'Giulietta',
            'marca_id'=>1,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>120,
            'precio'=>23.995,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulietta.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulietta 1.6 JTD 88kW 120CV Super',
            'nombre'=>'Giulietta',
            'marca_id'=>1,
            'carroceria_id'=>1,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>120,
            'precio'=>1.995,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulietta.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulietta 1.4 TB 88kW 120CV Sport',
            'nombre'=>'Giulietta',
            'marca_id'=>1,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>120,
            'precio'=>1.995,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulietta.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulietta 1.6 JTD 88kW 120CV Sport',
            'nombre'=>'Giulietta',
            'marca_id'=>1,
            'carroceria_id'=>1,
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
            'nombre'=>'Stelvio',
            'marca_id'=>1,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>190,
            'precio'=>49.995,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/stelvio.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Stelvio 2.2 Diesel 140kW 190CV Sprint RWD',
            'nombre'=>'Stelvio',
            'marca_id'=>1,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>190,
            'precio'=>54.295,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/stelvio.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Stelvio 2.0 Gasolina 147kW 200CV Sprint Q4',
            'nombre'=>'Stelvio',
            'marca_id'=>1,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>200,
            'precio'=>59.245,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/stelvio.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Stelvio 2.2 Diesel 140kW 190CV Sprint Q4',
            'nombre'=>'Stelvio',
            'marca_id'=>1,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>190,
            'precio'=>59.645,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/stelvio.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Stelvio 2.2 Diesel 154kW 210CV Veloce Q4',
            'nombre'=>'Stelvio',
            'marca_id'=>1,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>210,
            'precio'=>64.575,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/stelvio.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Stelvio 2.2 Diesel 154kW 210CV TI Q4',
            'nombre'=>'Stelvio',
            'marca_id'=>1,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>210,
            'precio'=>66.150,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/stelvio.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Stelvio 2.0 Gasolina 206kW 280CV Veloce Q4',
            'nombre'=>'Stelvio',
            'marca_id'=>1,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>280,
            'precio'=>68.215,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/stelvio.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Stelvio 2.0 Gasolina 206kW 280CV TI Q4',
            'nombre'=>'Stelvio',
            'marca_id'=>1,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>280,
            'precio'=>69.790,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/stelvio.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Stelvio 2.9 Gasolina 375kW 510CV Quadrifogl Q4',
            'nombre'=>'Stelvio',
            'marca_id'=>1,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>510,
            'precio'=>53.750,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/stelvio.jpg'
        ]);
        //--------------------------------------------------------------------------------------------------------------
        //--------------------------------------------------------------------------------------------------------------

        // AUDI A1

        Coche::create([
            'modelo'=>'AUDI A1 Sportback 30 TFSI 81kW 110CV',
            'nombre'=>'A1',
            'marca_id'=>2,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>110,
            'precio'=>23.203,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a1.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A1 Sportback S line 30 TFSI 81kW 110CV',
            'nombre'=>'A1',
            'marca_id'=>2,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>110,
            'precio'=>26.010,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a1.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A1 citycarver 35 TFSI 110kW 150CV',
            'nombre'=>'A1',
            'marca_id'=>2,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>28.410,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a1.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A1 Sportback Black line 40 TFSI 147kW S tro 200CV',
            'nombre'=>'A1',
            'marca_id'=>2,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>200,
            'precio'=>36.503,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a1.jpg'
        ]);

        // AUDI A3

        Coche::create([
            'modelo'=>'AUDI A3 Sportback 30 TFSI 81kW 110CV',
            'nombre'=>'A3',
            'marca_id'=>2,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>110,
            'precio'=>28.435,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a3.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A3 Sportback Advanced 35 TFSI 110kW 150CV',
            'nombre'=>'A3',
            'marca_id'=>2,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>31.735,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a3.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A3 Sportback 30 TDI 85kW 116CV S tronic',
            'nombre'=>'A3',
            'marca_id'=>2,
            'carroceria_id'=>1,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>116,
            'precio'=>32.935,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a3.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A3 S3 Sportback TFSI 228kW quattro S tronic',
            'nombre'=>'A3',
            'marca_id'=>2,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>310,
            'precio'=>54.288,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a3.jpg'
        ]);

        // AUDI A4

        Coche::create([
            'modelo'=>'AUDI A4 Avant Advanced 35 TFSI 110kW 150CV',
            'nombre'=>'A4',
            'marca_id'=>2,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>42.424,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a4.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A4 Avant Advanced 35 TDI 120kW S tronic 163CV',
            'nombre'=>'A4',
            'marca_id'=>2,
            'carroceria_id'=>2,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>163,
            'precio'=>46.924,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a4.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A4 Avant Black line 45 TFSI 195kW quat S tr 265CV',
            'nombre'=>'A4',
            'marca_id'=>2,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>265,
            'precio'=>59.850,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a4.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A4 RS4 Avant TFSI 331kW quattro tiptronic 450CV',
            'nombre'=>'A4',
            'marca_id'=>2,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>450,
            'precio'=>100.480,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a4.jpg'
        ]);

        // AUDI A6

        Coche::create([
            'modelo'=>'AUDI A6 Avant Sport 35 TDI 120kW 163CV S tron. 163CV',
            'nombre'=>'A6',
            'marca_id'=>2,
            'carroceria_id'=>2,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>163,
            'precio'=>60.699,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a6.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A6 Avant 45 TFSI quattroultra 265CV',
            'nombre'=>'A6',
            'marca_id'=>2,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>265,
            'precio'=>65.553,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a6.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A6 Avant Sport 50 TDI 210kW quattro tiptro 286CV',
            'nombre'=>'A6',
            'marca_id'=>2,
            'carroceria_id'=>2,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>286,
            'precio'=>77.863,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a6.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A6 RS 6 Avant TFSI quattro 600CV',
            'nombre'=>'A6',
            'marca_id'=>2,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>600,
            'precio'=>142.536,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a6.jpg'
        ]);

        // AUDI A5

        Coche::create([
            'modelo'=>'AUDI A5 40 TDI 150kW S tronic Coupe 204CV',
            'nombre'=>'A5',
            'marca_id'=>2,
            'carroceria_id'=>3,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>204,
            'precio'=>49.634,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a5.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A5 S line 40 TFSI 150kW S tronic Coupe 204CV',
            'nombre'=>'A5',
            'marca_id'=>2,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>204,
            'precio'=>51.764,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a5.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A5 S5 TDI quattro Coupe 341CV',
            'nombre'=>'A5',
            'marca_id'=>2,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>341,
            'precio'=>80.172,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a5.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A5 Black Line 45 TFSI quattroultra Coupe 265CV',
            'nombre'=>'A5',
            'marca_id'=>2,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>265,
            'precio'=>62.276,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a5.jpg'
        ]);


        // AUDI A7

        Coche::create([
            'modelo'=>'AUDI A7 Sportback 40 TDI 150kW S tronic 204CV',
            'nombre'=>'A7',
            'marca_id'=>2,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>204,
            'precio'=>70.983,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a7.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A7 Sportback S line 45 TDI 180kW quat S tro 245CV',
            'nombre'=>'A7',
            'marca_id'=>2,
            'carroceria_id'=>3,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>245,
            'precio'=>83.130,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a7.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A7 Sportback 55 TFSI 250kW quattro S tronic 340CV',
            'nombre'=>'A7',
            'marca_id'=>2,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>340,
            'precio'=>88.779,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a7.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A7 Sportback RS7 TFSI 441kW quattro tiptron 600CV',
            'nombre'=>'A7',
            'marca_id'=>2,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>600,
            'precio'=>148.266,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a7.jpg'
        ]);

        // AUDI Q3

        Coche::create([
            'modelo'=>'AUDI Q3 Advanced 35 TDI 110kW 150CV 150CV',
            'nombre'=>'Q3',
            'marca_id'=>2,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>39.965,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q3.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI Q3 40 TDI 140kW 190CV S tronic Quattro 200CV',
            'nombre'=>'Q3',
            'marca_id'=>2,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>200,
            'precio'=>44.802,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q3.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI Q3 45 TFSI 180kW S tronic Quattro Advanced 245CV',
            'nombre'=>'Q3',
            'marca_id'=>2,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>245,
            'precio'=>53.058,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q3.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI Q3 RS 2.5 TFSI quattro 400CV',
            'nombre'=>'Q3',
            'marca_id'=>2,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>400,
            'precio'=>73.785,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q3.jpg'
        ]);

        // AUDI Q5

        Coche::create([
            'modelo'=>'AUDI Q5 Advanced 35 TDI 120kW S tronic 163CV',
            'nombre'=>'Q5',
            'marca_id'=>2,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>163,
            'precio'=>52.034,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q5.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI Q5 Black line 40 TDI 150kW quattroultra 204CV',
            'nombre'=>'Q5',
            'marca_id'=>2,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>204,
            'precio'=>62.081,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q5.jpg'
        ]);


        Coche::create([
            'modelo'=>'AUDI Q5 Advanced 45 TFSI 195kW quattro S tronic 265CV',
            'nombre'=>'Q5',
            'marca_id'=>2,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>265,
            'precio'=>63.556,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q5.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI Q5 SQ5 TDI Quattro 341CV',
            'nombre'=>'Q5',
            'marca_id'=>2,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>341,
            'precio'=>79.104,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q5.jpg'
        ]);

        // AUDI Q7

        Coche::create([
            'modelo'=>'AUDI Q7 50 TDI 210kW 286CV quattro tiptronic 286CV',
            'nombre'=>'Q7',
            'marca_id'=>2,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>286,
            'precio'=>78.080,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q7.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI Q7 Black line 45 TDI 170kW 232CV qua. ti. 231CV',
            'nombre'=>'Q7',
            'marca_id'=>2,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>231,
            'precio'=>80.355,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q7.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI Q7 Black line 50 TDI 210kW 286CV q. tip. 286CV',
            'nombre'=>'Q7',
            'marca_id'=>2,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>286,
            'precio'=>87.355,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q7.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI Q7 SQ7 TFSI 373kW 507CV quattro tiptronic 507CV',
            'nombre'=>'Q7',
            'marca_id'=>2,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>507,
            'precio'=>115.793,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q7.jpg'
        ]);

       // AUDI Q8

       Coche::create([
            'modelo'=>'AUDI Q8 55 TFSI 250kW 340CV quattro tiptronic 340CV',
            'nombre'=>'Q8',
            'marca_id'=>2,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>340,
            'precio'=>85.929,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q8.jpg'
        ]);
    
        Coche::create([
            'modelo'=>'AUDI Q8 45 TDI 170kW S Line quattro tiptronic 231CV',
            'nombre'=>'Q8',
            'marca_id'=>2,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>231,
            'precio'=>89.927,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q8.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI Q8 50 TDI 210kW Black L quattro tiptronic 286CV',
            'nombre'=>'Q8',
            'marca_id'=>2,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>286,
            'precio'=>96.245,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q8.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI Q8 RS Q8 TFSI 441kW quattro tipt 600CV',
            'nombre'=>'Q8',
            'marca_id'=>2,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>600,
            'precio'=>160.599,
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q8.jpg'
        ]);



    }
}
