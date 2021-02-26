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
            'modelo'=>'ALFA ROMEO Giulia 2.2 Diesel 58kW Super RWD',
            'nombre'=>'Giulia',
            'marca_id'=>24,
            'carroceria_id'=>3,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>160,
            'precio'=>'44.750',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulia.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulia 2.2 Diesel 58kW Sprint RWD',
            'nombre'=>'Giulia',
            'marca_id'=>24,
            'carroceria_id'=>3,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>160,
            'precio'=>'49.500',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulia.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulia 2.2 Diesel 140kW Sprint RWD',
            'nombre'=>'Giulia',
            'marca_id'=>24,
            'carroceria_id'=>3,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>190,
            'precio'=>'53.050',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulia.jpg'
        ]);

        //ALFA ROMEO GIULIETTA

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulietta 1.4 TB 88kW Super',
            'nombre'=>'Giulietta',
            'marca_id'=>24,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>120,
            'precio'=>'23.995',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulietta.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulietta 1.6 JTD 88kW Super',
            'nombre'=>'Giulietta',
            'marca_id'=>24,
            'carroceria_id'=>1,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>120,
            'precio'=>'24.995',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulietta.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulietta 1.4 TB 88kW Sport',
            'nombre'=>'Giulietta',
            'marca_id'=>24,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>120,
            'precio'=>'24.995',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulietta.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Giulietta 1.6 JTD 88kW Sport',
            'nombre'=>'Giulietta',
            'marca_id'=>24,
            'carroceria_id'=>1,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>120,
            'precio'=>'25.955',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/giulietta.jpg'
        ]);

        //ALFA ROMEO STELVIO

        Coche::create([
            'modelo'=>'ALFA ROMEO Stelvio 2.2 Diesel 140kW Super RWD',
            'nombre'=>'Stelvio',
            'marca_id'=>24,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>190,
            'precio'=>'49.995',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/stelvio.jpg'
        ]);

        Coche::create([
            'modelo'=>'ALFA ROMEO Stelvio 2.2 Diesel 140kW Sprint RWD',
            'nombre'=>'Stelvio',
            'marca_id'=>24,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>190,
            'precio'=>'54.295',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/alfaRomeo/stelvio.jpg'
        ]);
  
        //--------------------------------------------------------------------------------------------------------------
        //--------------------------------------------------------------------------------------------------------------

        // AUDI A1

        Coche::create([
            'modelo'=>'AUDI A1 Sportback 30 TFSI 81kW',
            'nombre'=>'A1',
            'marca_id'=>25,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>110,
            'precio'=>'23.203',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a1.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A1 Sportback S line 30 TFSI 81kW',
            'nombre'=>'A1',
            'marca_id'=>25,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>110,
            'precio'=>'26.010',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a1.jpg'
        ]);


        // AUDI A3

        Coche::create([
            'modelo'=>'AUDI A3 Sportback 30 TFSI 81kW',
            'nombre'=>'A3',
            'marca_id'=>25,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>110,
            'precio'=>'28.435',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a3.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A3 Sportback Advanced 35 TFSI 110kW',
            'nombre'=>'A3',
            'marca_id'=>25,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>'31.735',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a3.jpg'
        ]);

        // AUDI A4

        Coche::create([
            'modelo'=>'AUDI A4 Avant Advanced 35 TFSI 110kW',
            'nombre'=>'A4',
            'marca_id'=>25,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>'42.424',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a4.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A4 Avant Advanced 35 TDI 120kW S tronic',
            'nombre'=>'A4',
            'marca_id'=>25,
            'carroceria_id'=>2,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>163,
            'precio'=>'46.924',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a4.jpg'
        ]);

        // AUDI A6

        Coche::create([
            'modelo'=>'AUDI A6 Avant Sport 35 TDI 120kW S tron',
            'nombre'=>'A6',
            'marca_id'=>25,
            'carroceria_id'=>2,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>163,
            'precio'=>'60.699',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a6.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A6 Avant 45 TFSI quattroultra',
            'nombre'=>'A6',
            'marca_id'=>25,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>265,
            'precio'=>'65.553',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/a6.jpg'
        ]);

        // AUDI A5

        Coche::create([
            'modelo'=>'AUDI A5 40 TDI 150kW S tronic Coupe',
            'nombre'=>'A5',
            'marca_id'=>25,
            'carroceria_id'=>3,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>204,
            'precio'=>'49.634',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/audi/a5.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A5 S line 40 TFSI 150kW S tronic Coupe',
            'nombre'=>'A5',
            'marca_id'=>25,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>204,
            'precio'=>'51.764',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/audi/a5.jpg'
        ]);


        // AUDI A7

        Coche::create([
            'modelo'=>'AUDI A7 Sportback 40 TDI 150kW S tronic',
            'nombre'=>'A7',
            'marca_id'=>25,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>204,
            'precio'=>'70.983',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/audi/a7.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI A7 Sportback S line 45 TDI 180kW quat S tro',
            'nombre'=>'A7',
            'marca_id'=>25,
            'carroceria_id'=>3,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>245,
            'precio'=>'83.130',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/audi/a7.jpg'
        ]);

        // AUDI Q3

        Coche::create([
            'modelo'=>'AUDI Q3 Advanced 35 TDI 110kW',
            'nombre'=>'Q3',
            'marca_id'=>25,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>'39.965',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q3.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI Q3 40 TDI 140kW S tronic Quattro',
            'nombre'=>'Q3',
            'marca_id'=>25,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>200,
            'precio'=>'44.802',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q3.jpg'
        ]);

        // AUDI Q5

        Coche::create([
            'modelo'=>'AUDI Q5 Advanced 35 TDI 120kW S tronic',
            'nombre'=>'Q5',
            'marca_id'=>25,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>163,
            'precio'=>'52.034',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q5.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI Q5 Black line 40 TDI 150kW quattroultra',
            'nombre'=>'Q5',
            'marca_id'=>25,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>204,
            'precio'=>'62.081',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q5.jpg'
        ]);

        // AUDI Q7

        Coche::create([
            'modelo'=>'AUDI Q7 50 TDI 210kW quattro tiptronic',
            'nombre'=>'Q7',
            'marca_id'=>25,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>286,
            'precio'=>'78.080',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q7.jpg'
        ]);

        Coche::create([
            'modelo'=>'AUDI Q7 Black line 45 TDI 170kW qua. ti',
            'nombre'=>'Q7',
            'marca_id'=>25,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>231,
            'precio'=>'80.355',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q7.jpg'
        ]);


       // AUDI Q8

       Coche::create([
            'modelo'=>'AUDI Q8 55 TFSI 250kW quattro tiptronic',
            'nombre'=>'Q8',
            'marca_id'=>25,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>340,
            'precio'=>'85.929',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q8.jpg'
        ]);
    
        Coche::create([
            'modelo'=>'AUDI Q8 45 TDI 170kW S Line quattro tiptronic',
            'nombre'=>'Q8',
            'marca_id'=>25,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>231,
            'precio'=>'89.927',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/audi/q8.jpg'
        ]);

        //--------------------------------------------------------------------------------------------------------------
        //--------------------------------------------------------------------------------------------------------------

        // BMW SERIE 1

        Coche::create([
            'modelo'=>'BMW SERIE 1 118i',
            'nombre'=>'Serie 1',
            'marca_id'=>26,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>136,
            'precio'=>'30.400',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/bmw/serie1.jpg'
        ]);

        Coche::create([
            'modelo'=>'BMW SERIE 1 118d Business',
            'nombre'=>'Serie 1',
            'marca_id'=>26,
            'carroceria_id'=>1,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>'35.119',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/bmw/serie1.jpg'
        ]);

        // BMW Serie 3

        Coche::create([
            'modelo'=>'BMW SERIE 3 318d Auto.Touring',
            'nombre'=>'Serie 3',
            'marca_id'=>26,
            'carroceria_id'=>2,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>150,
            'precio'=>'46.050',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/bmw/serie3.jpg'
        ]);

        Coche::create([
            'modelo'=>'BMW SERIE 3 320i Auto. Touring',
            'nombre'=>'Serie 3',
            'marca_id'=>26,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>184,
            'precio'=>'46.950',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/bmw/serie3.jpg'
        ]);

        // BMW SERIE 5

        Coche::create([
            'modelo'=>'BMW SERIE 5 520iA Touring',
            'nombre'=>'Serie 5',
            'marca_id'=>26,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>184,
            'precio'=>'59.750',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/bmw/serie5.jpg'
        ]);

        Coche::create([
            'modelo'=>'BMW SERIE 5 520dA xDrive Touring',
            'nombre'=>'Serie 5',
            'marca_id'=>26,
            'carroceria_id'=>2,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>190,
            'precio'=>'62.250',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/bmw/serie5.jpg'
        ]);

        //BMW SERIE 2

        Coche::create([
            'modelo'=>'BMW SERIE 2 218i',
            'nombre'=>'Serie 2',
            'marca_id'=>26,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>136,
            'precio'=>'36.000',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/bmw/coupe2.jpg'
        ]);

        Coche::create([
            'modelo'=>'BMW SERIE 2 230iA',
            'nombre'=>'Serie 2',
            'marca_id'=>26,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>252,
            'precio'=>'44.800',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/bmw/coupe2.jpg'
        ]);

        //BMW SERIE 4

        Coche::create([
            'modelo'=>'BMW SERIE 4 420i',
            'nombre'=>'Serie 4',
            'marca_id'=>26,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>184,
            'precio'=>'48.500',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/bmw/serie4.jpg'
        ]);

        Coche::create([
            'modelo'=>'BMW SERIE 4 420d',
            'nombre'=>'Serie 4',
            'marca_id'=>26,
            'carroceria_id'=>3,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>190,
            'precio'=>'49.450',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/bmw/serie4.jpg'
        ]);

        //BMW SERIE 8

        Coche::create([
            'modelo'=>'BMW SERIE 8 840i',
            'nombre'=>'Serie 8',
            'marca_id'=>26,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>333,
            'precio'=>'106.600',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/bmw/serie8.jpg'
        ]);

        Coche::create([
            'modelo'=>'BMW SERIE 8 840d xDrive',
            'nombre'=>'Serie 8',
            'marca_id'=>26,
            'carroceria_id'=>3,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>320,
            'precio'=>'113.200',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/bmw/serie8.jpg'
        ]);


        // BMW SERIE 2 MONOVOLUMEN

        Coche::create([
            'modelo'=>'BMW SERIE 2 ACTIVE TOURER 218i',
            'nombre'=>'Serie 2 ACTIVE TOURER',
            'marca_id'=>26,
            'carroceria_id'=>4,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>136,
            'precio'=>'31.300',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/bmw/mono2.jpg'
        ]);

        Coche::create([
            'modelo'=>'BMW SERIE 2 ACTIVE TOURER 218d Business',
            'nombre'=>'Serie 2 ACTIVE TOURER',
            'marca_id'=>26,
            'carroceria_id'=>4,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>'34.638',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/bmw/mono2.jpg'
        ]);


        // BMW X1

        Coche::create([
            'modelo'=>'BMW X1 sDrive18d',
            'nombre'=>'X1',
            'marca_id'=>26,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>'35.300',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/bmw/x1.jpg'
        ]);

        Coche::create([
            'modelo'=>'BMW X1 xDrive20i Auto',
            'nombre'=>'X1',
            'marca_id'=>26,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>178,
            'precio'=>'42.200',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/bmw/x1.jpg'
        ]);

      
        // BMW X2

        Coche::create([
            'modelo'=>'BMW X2 sDrive18d',
            'nombre'=>'X2',
            'marca_id'=>26,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>'36.800',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/bmw/x2.jpg'
        ]);

        Coche::create([
            'modelo'=>'BMW X2 xDrive20i Auto',
            'nombre'=>'X2',
            'marca_id'=>26,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>178,
            'precio'=>'43.950',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/bmw/x2.jpg'
        ]);
   
        //BMW X3

        Coche::create([
            'modelo'=>'BMW X3 xDrive20d',
            'nombre'=>'X3',
            'marca_id'=>26,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>190,
            'precio'=>'53.350',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/bmw/x3.jpg'
        ]);

        Coche::create([
            'modelo'=>'BMW X3 M40i',
            'nombre'=>'X3',
            'marca_id'=>26,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>354,
            'precio'=>'77.300',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/bmw/x3.jpg'
        ]);

        //BMW X4

        Coche::create([
            'modelo'=>'BMW X4 xDrive20d',
            'nombre'=>'X4',
            'marca_id'=>26,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>190,
            'precio'=>'57.000',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/bmw/x4.jpg'
        ]);

        Coche::create([
            'modelo'=>'BMW X4 xDrive30i',
            'nombre'=>'X4',
            'marca_id'=>26,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>252,
            'precio'=>'62.000',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/bmw/x4.jpg'
        ]);

        //BMW X5

        Coche::create([
            'modelo'=>'BMW X5 xDrive30d',
            'nombre'=>'X5',
            'marca_id'=>26,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>286,
            'precio'=>'78.300',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/bmw/x5.jpg'
        ]);

        Coche::create([
            'modelo'=>'BMW X5 xDrive40i',
            'nombre'=>'X5',
            'marca_id'=>26,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>333,
            'precio'=>'79.800',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/bmw/x5.jpg'
        ]);

        //BMW X6

        Coche::create([
            'modelo'=>'BMW X6 xDrive30d',
            'nombre'=>'X6',
            'marca_id'=>26,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>286,
            'precio'=>'85.100',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/bmw/x6.jpg'
        ]);


        Coche::create([
            'modelo'=>'BMW X6 xDrive40i',
            'nombre'=>'X6',
            'marca_id'=>26,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>333,
            'precio'=>'84.900',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/bmw/x6.jpg'
        ]);


        //--------------------------------------------------------------------------------------------------------------
        //--------------------------------------------------------------------------------------------------------------

        //Citroën C1

        Coche::create([
            'modelo'=>'CITROEN C1 VTi 53kW SS City Edition',
            'nombre'=>'C1',
            'marca_id'=>27,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>72,
            'precio'=>'14.469',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/citroen/c1.jpg'
        ]);


        Coche::create([
            'modelo'=>'CITROEN C1 Airscape VTi 53kW SS Shine',
            'nombre'=>'C1',
            'marca_id'=>27,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>72,
            'precio'=>'15.909',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/citroen/c1.jpg'
        ]);

        // Citroën C3

        Coche::create([
            'modelo'=>'CITROEN C3 BlueHDi 75KW SS Live Pack',
            'nombre'=>'C3',
            'marca_id'=>27,
            'carroceria_id'=>1,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>102,
            'precio'=>'18.561',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/citroen/c3.jpg'
        ]);

        Coche::create([
            'modelo'=>'CITROEN C3 PureTech 81KW SS Shine EAT6',
            'nombre'=>'C3',
            'marca_id'=>27,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>110,
            'precio'=>'22.792',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/citroen/c3.jpg'
        ]);

        //Citroën C4    

        Coche::create([
            'modelo'=>'CITROEN C4 BlueHdi SS EAT8 Feel Pack',
            'nombre'=>'C4',
            'marca_id'=>27,
            'carroceria_id'=>1,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>130,
            'precio'=>'26.823',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/citroen/c4.jpg'
        ]);

        Coche::create([
            'modelo'=>'CITROEN C4 PureTech SS EAT8 Shine',
            'nombre'=>'C4',
            'marca_id'=>27,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>155,
            'precio'=>'29.019',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/citroen/c4.jpg'
        ]);

        // Citroën C4 cactus

        Coche::create([
            'modelo'=>'CITROEN C4 CACTUS BlueHDi 73KW Feel',
            'nombre'=>'C4 cactus',
            'marca_id'=>27,
            'carroceria_id'=>1,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>100,
            'precio'=>'18.900',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/citroen/c4c.jpg'
        ]);

        Coche::create([
            'modelo'=>'CITROEN C4 CACTUS PureTech 60KW Feel ',
            'nombre'=>'C4 cactus',
            'marca_id'=>27,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>82,
            'precio'=>'16.800',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/citroen/c4c.jpg'
        ]);

        //Citroën Berlingo


        Coche::create([
            'modelo'=>'CITROEN BERLINGO Talla M BlueHDi SS LIVE PACK',
            'nombre'=>'Berlingo',
            'marca_id'=>27,
            'carroceria_id'=>4,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>102,
            'precio'=>'25.006',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/citroen/berlingo.jpg'
        ]);

        Coche::create([
            'modelo'=>'CITROEN BERLINGO Talla XL PureTech SS FEEL',
            'nombre'=>'Berlingo',
            'marca_id'=>27,
            'carroceria_id'=>4,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>110,
            'precio'=>'26.793',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/citroen/berlingo.jpg'
        ]);

        // Citroën SPACETOURER

        Coche::create([
            'modelo'=>'CITROEN SPACETOURER Talla XL BlueHDi 103KW SS Feel',
            'nombre'=>'SPACETOURER',
            'marca_id'=>27,
            'carroceria_id'=>4,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>145,
            'precio'=>'47.336',
            'plazas'=>8,
            'foto'=>'img/fotosCoches/citroen/space.jpg'
        ]);

        Coche::create([
            'modelo'=>'CITROEN SPACETOURER Talla XL BlueHDi 130kW Shine EAT8',
            'nombre'=>'SPACETOURER',
            'marca_id'=>27,
            'carroceria_id'=>4,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>177,
            'precio'=>'60.718',
            'plazas'=>8,
            'foto'=>'img/fotosCoches/citroen/space.jpg'
        ]);

        //Citroën C3 AIRCROSS

        Coche::create([
            'modelo'=>'CITROEN C3 AIRCROSS BlueHDi 81kW SS Feel',
            'nombre'=>'C3 aircross',
            'marca_id'=>27,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>110,
            'precio'=>'21.950',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/citroen/c3a.jpg'
        ]);

        Coche::create([
            'modelo'=>'CITROEN C3 AIRCROSS PureTech 96kW SS EAT6 Shine',
            'nombre'=>'C3 aircross',
            'marca_id'=>27,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>131,
            'precio'=>'25.962',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/citroen/c3a.jpg'
        ]);

        //Citroën C5 AIRCROSS

        Coche::create([
            'modelo'=>'CITROEN C5 AIRCROSS BlueHdi 96kW SS Live Pack',
            'nombre'=>'C5 aircross',
            'marca_id'=>27,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>131,
            'precio'=>'29.259',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/citroen/c5.jpg'
        ]);

        Coche::create([
            'modelo'=>'CITROEN C5 AIRCROSS PureTech 132kW SS EAT8 Shine',
            'nombre'=>'C5 aircross',
            'marca_id'=>27,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>181,
            'precio'=>'36.345',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/citroen/c5.jpg'
        ]);


        //--------------------------------------------------------------------------------------------------------------
        //--------------------------------------------------------------------------------------------------------------


        //Dacia Logan

        Coche::create([
            'modelo'=>'DACIA LOGAN Essential Blue dCi 70kW SS',
            'nombre'=>'Logan',
            'marca_id'=>28,
            'carroceria_id'=>1,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>95,
            'precio'=>'12.165',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/dacia/logan.jpg'
        ]);

        Coche::create([
            'modelo'=>'DACIA LOGAN Ambiance 1.2 75 EU6',
            'nombre'=>'Logan',
            'marca_id'=>28,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>75,
            'precio'=>'9.180',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/dacia/logan.jpg'
        ]);

        //Dacia Sandero

        Coche::create([
            'modelo'=>'DACIA SANDERO Comfort Blue dCi 70kW SS',
            'nombre'=>'Sandero',
            'marca_id'=>28,
            'carroceria_id'=>1,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>95,
            'precio'=>'12.845',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/dacia/sand.jpg'
        ]);

        Coche::create([
            'modelo'=>'DACIA SANDERO SL Aniversario TCe 1.0 74kW SS',
            'nombre'=>'Sandero',
            'marca_id'=>28,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>100,
            'precio'=>'14.513',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/dacia/sand.jpg'
        ]);

        //Dacia Logan FAMILIAR

        Coche::create([
            'modelo'=>'DACIA LOGAN MCV Comfort Blue dCi 70kW',
            'nombre'=>'Sandero Familiar',
            'marca_id'=>28,
            'carroceria_id'=>2,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>95,
            'precio'=>'13.415',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/dacia/loganfa.jpg'
        ]);

        Coche::create([
            'modelo'=>'DACIA LOGAN MCV SL Aniversario TCe 74kW',
            'nombre'=>'Sandero Familiar',
            'marca_id'=>28,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>100,
            'precio'=>'15.449',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/dacia/loganfa.jpg'
        ]);

        //Dacia Lodgy

        Coche::create([
            'modelo'=>'DACIA LODGY Comfort Blue dCi 70kW 7Pl 18',
            'nombre'=>'Lodgy',
            'marca_id'=>28,
            'carroceria_id'=>4,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>95,
            'precio'=>'16.740',
            'plazas'=>7,
            'foto'=>'img/fotosCoches/dacia/lodgy.jpg'
        ]);

        Coche::create([
            'modelo'=>'DACIA LODGY SL Aniversario Blue dCi 85kW 7Pl',
            'nombre'=>'Lodgy',
            'marca_id'=>28,
            'carroceria_id'=>4,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>115,
            'precio'=>'18.260',
            'plazas'=>7,
            'foto'=>'img/fotosCoches/dacia/lodgy.jpg'
        ]);

        //Dacia Duster

        Coche::create([
            'modelo'=>'DACIA DUSTER Essent. Blue dCi 85kW 4X2',
            'nombre'=>'Duster',
            'marca_id'=>28,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>115,
            'precio'=>'17.924',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/dacia/duster.jpg'
        ]);

        Coche::create([
            'modelo'=>'DACIA DUSTER Comfort TCE 96kW 4X2 GPF',
            'nombre'=>'Duster',
            'marca_id'=>28,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>130,
            'precio'=>'19.274',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/dacia/duster.jpg'
        ]);

        //--------------------------------------------------------------------------------------------------------------
        //--------------------------------------------------------------------------------------------------------------

        // Fiat 500

        Coche::create([
            'modelo'=>'FIAT 500 Cult 1.0 52KW',
            'nombre'=>'500',
            'marca_id'=>29,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>70,
            'precio'=>'19.000',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/fiat/500.jpg'
        ]);

        Coche::create([
            'modelo'=>'FIAT 500 Sport 1.0 52KW',
            'nombre'=>'500',
            'marca_id'=>29,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>70,
            'precio'=>'22.000',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/fiat/500.jpg'
        ]);

        // Fiat Tipo

        Coche::create([
            'modelo'=>'FIAT TIPO City Life 1.3 Mjet 70kW',
            'nombre'=>'Tipo',
            'marca_id'=>29,
            'carroceria_id'=>1,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>95,
            'precio'=>'22.100',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/fiat/tipo.jpg'
        ]);

        Coche::create([
            'modelo'=>'FIAT TIPO Cross 1.0 73kW',
            'nombre'=>'Tipo',
            'marca_id'=>29,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>101,
            'precio'=>'24.000',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/fiat/tipo.jpg'
        ]);

        // Fiat Panda

        Coche::create([
            'modelo'=>'FIAT PANDA City Life Hybrid 1.0 Gse 51kw',
            'nombre'=>'Tipo',
            'marca_id'=>29,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>70,
            'precio'=>'14.600',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/fiat/panda.jpg'
        ]);

        Coche::create([
            'modelo'=>'FIAT PANDA Cross 09 63 kW TwinAir 4x4',
            'nombre'=>'Panda',
            'marca_id'=>29,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>85,
            'precio'=>'23.250',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/fiat/panda.jpg'
        ]);

        // Fiat Tipo Familiar

        Coche::create([
            'modelo'=>'FIAT TIPO SW City Life 1.0 73kW',
            'nombre'=>'Tipo Familiar',
            'marca_id'=>29,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>101,
            'precio'=>'22.450',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/fiat/tipofa.jpg'
        ]);

        Coche::create([
            'modelo'=>'FIAT TIPO SW Life 1.6 Mjet 95kW',
            'nombre'=>'Tipo Familiar',
            'marca_id'=>29,
            'carroceria_id'=>2,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>130,
            'precio'=>'26.100',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/fiat/tipofa.jpg'
        ]);

        // Fiat 500L

        Coche::create([
            'modelo'=>'FIAT 500L Connect 1.3 16v Multijet 70 kW',
            'nombre'=>'500L',
            'marca_id'=>29,
            'carroceria_id'=>4,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>130,
            'precio'=>'21.900',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/fiat/500l.jpg'
        ]);

        Coche::create([
            'modelo'=>'FIAT 500L Sport 1.4 16v 70 kW',
            'nombre'=>'500L',
            'marca_id'=>29,
            'carroceria_id'=>4,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>95,
            'precio'=>'22.700',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/fiat/500l.jpg'
        ]);

        // Fiat 500x

        Coche::create([
            'modelo'=>'FIAT 500X Cult 1.3 MultiJet 70KW',
            'nombre'=>'500X',
            'marca_id'=>29,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>95,
            'precio'=>'22.800',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/fiat/500x.jpg'
        ]);

        
        Coche::create([
            'modelo'=>'FIAT 500X Sport 1.3 Firefly T4 110KW SS DCT',
            'nombre'=>'500X',
            'marca_id'=>29,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>150,
            'precio'=>'27.800',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/fiat/500x.jpg'
        ]);



        //--------------------------------------------------------------------------------------------------------------
        //--------------------------------------------------------------------------------------------------------------


        // Ford Focus

        Coche::create([
            'modelo'=>'FORD FOCUS 1.5 Ecoblue 70kW Trend',
            'nombre'=>'Focus',
            'marca_id'=>30,
            'carroceria_id'=>1,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>95,
            'precio'=>'22.260',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/ford/focus.jpg'
        ]);

        Coche::create([
            'modelo'=>'FORD FOCUS 1.5 Ecoboost 135kW STLine X Auto',
            'nombre'=>'Focus',
            'marca_id'=>30,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>182,
            'precio'=>'30.418',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/ford/focus.jpg'
        ]);

        // Ford Fiesta

        Coche::create([
            'modelo'=>'FORD FIESTA 1.6 TDCi DPF Trend',
            'nombre'=>'Fiesta',
            'marca_id'=>30,
            'carroceria_id'=>1,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>95,
            'precio'=>'15.400',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/ford/fiesta.jpg'
        ]);

        Coche::create([
            'modelo'=>'FORD FIESTA 1.5 EcoBoost 147kW ST',
            'nombre'=>'Fiesta',
            'marca_id'=>30,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>200,
            'precio'=>'28.198',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/ford/fiesta.jpg'
        ]);

        // Ford Focus Familiar

        Coche::create([
            'modelo'=>'FORD FOCUS 1.5 Ecoblue 88kW Trend SB',
            'nombre'=>'Focus Familiar',
            'marca_id'=>30,
            'carroceria_id'=>2,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>120,
            'precio'=>'26.485',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/ford/focusfa.jpg'
        ]);

        Coche::create([
            'modelo'=>'FORD FOCUS 2.3 Ecoboost 206kW ST 3 SB',
            'nombre'=>'Focus Familiar',
            'marca_id'=>30,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>280,
            'precio'=>'37.812',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/ford/focusfa.jpg'
        ]);

        // Ford Mondeo


        Coche::create([
            'modelo'=>'FORD MONDEO 2.0 TDCi 110kW Trend Powershift SB',
            'nombre'=>'Mondeo',
            'marca_id'=>30,
            'carroceria_id'=>2,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>'35.949',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/ford/mondeo.jpg'
        ]);

        Coche::create([
            'modelo'=>'FORD MONDEO 2.0 Hibrido 138kW Vignale HEV Auto SB',
            'nombre'=>'Mondeo',
            'marca_id'=>30,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>187,
            'precio'=>'46.698',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/ford/mondeo.jpg'
        ]);

        //Ford Mustang

        Coche::create([
            'modelo'=>'FORD MUSTANG 5.0 TiVCT V8 336kW Mustang GT Fastsb',
            'nombre'=>'Msutang',
            'marca_id'=>30,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>450,
            'precio'=>'50.471',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/ford/mustang.jpg'
        ]);

        Coche::create([
            'modelo'=>'FORD MUSTANG 5.0 TiVCT V8 Mustang Mach I ATFastsb',
            'nombre'=>'Msutang',
            'marca_id'=>30,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>459,
            'precio'=>'65.971',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/ford/mustang.jpg'
        ]);


        // Ford Galaxy

        Coche::create([
            'modelo'=>'FORD GALAXY 2.0 TDCi 110kW Titanium',
            'nombre'=>'Galaxy',
            'marca_id'=>30,
            'carroceria_id'=>4,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>'46.075',
            'plazas'=>7,
            'foto'=>'img/fotosCoches/ford/galaxy.jpg'
        ]);

        Coche::create([
            'modelo'=>'FORD GALAXY 2.5 Duratec FHEV 140kW Titanium Auto',
            'nombre'=>'Galaxy',
            'marca_id'=>30,
            'carroceria_id'=>4,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>190,
            'precio'=>'47.338',
            'plazas'=>7,
            'foto'=>'img/fotosCoches/ford/galaxy.jpg'
        ]);

        // Ford Smax

        Coche::create([
            'modelo'=>'FORD SMAX 2.0 TDCi Panther 110kW Titanium',
            'nombre'=>'Smax',
            'marca_id'=>30,
            'carroceria_id'=>4,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>'40.288',
            'plazas'=>7,
            'foto'=>'img/fotosCoches/ford/smax.jpg'
        ]);

        Coche::create([
            'modelo'=>'FORD SMAX 2.5 Duratec Atkinson FHEV 140kW Vignale',
            'nombre'=>'Smax',
            'marca_id'=>30,
            'carroceria_id'=>4,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>190,
            'precio'=>'40.288',
            'plazas'=>7,
            'foto'=>'img/fotosCoches/ford/smax.jpg'
        ]);

        //Ford Kuga

        Coche::create([
            'modelo'=>'FORD KUGA Trend 2.0 EcoBlue MHEV 110kW',
            'nombre'=>'Kuga',
            'marca_id'=>30,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>'31.338',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/ford/kuga.jpg'
        ]);

        Coche::create([
            'modelo'=>'FORD KUGA Vignale 2.5 Duratec FHEV 140kW 4x4 Auto',
            'nombre'=>'Kuga',
            'marca_id'=>30,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>190,
            'precio'=>'42.922',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/ford/kuga.jpg'
        ]);

        // Ford EcoSport

        Coche::create([
            'modelo'=>'FORD ECOSPORT 1.0T EcoBoost 92kW SS Titanium',
            'nombre'=>'Ecosport',
            'marca_id'=>30,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>125,
            'precio'=>'23.487',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/ford/eco.jpg'
        ]);

        Coche::create([
            'modelo'=>'FORD ECOSPORT 1.0T EcoBoost 103kW SS ST Line',
            'nombre'=>'Ecosport',
            'marca_id'=>30,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>140,
            'precio'=>'25.098',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/ford/eco.jpg'
        ]);


        //--------------------------------------------------------------------------------------------------------------
        //--------------------------------------------------------------------------------------------------------------

        // Honda Civic
        
        Coche::create([
            'modelo'=>'HONDA CIVIC 1.0 IVTEC TURBO CVT ELEGANCE NAV',
            'nombre'=>'Civic',
            'marca_id'=>31,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>126,
            'precio'=>'28.735',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/honda/civic.jpg'
        ]);
         
        Coche::create([
            'modelo'=>'HONDA CIVIC 1.5 IVTEC TURBO CVT SPORT PLUS',
            'nombre'=>'Civic',
            'marca_id'=>31,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>182,
            'precio'=>'33.100',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/honda/civic.jpg'
        ]);

        // Honda CR-V

        Coche::create([
            'modelo'=>'HONDA CRV 2.0 iMMD 4x2 ELEGANCE NAVI',
            'nombre'=>'CR-V',
            'marca_id'=>31,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>184,
            'precio'=>'40.060',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/honda/crv.jpg'
        ]);

        Coche::create([
            'modelo'=>'HONDA CRV 2.0 iMMD 4x4 EXECUTIVE',
            'nombre'=>'CR-V',
            'marca_id'=>31,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>184,
            'precio'=>'50.480',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/honda/crv.jpg'
        ]);

        // Honda HR-V

        Coche::create([
            'modelo'=>'HONDA HRV 1.5 iVTEC Elegance Navi CVT',
            'nombre'=>'HR-V',
            'marca_id'=>31,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>130,
            'precio'=>'28.850',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/honda/hrv.jpg'
        ]);

        Coche::create([
            'modelo'=>'HONDA HRV 1.5 iVTEC Turbo Sport CVT',
            'nombre'=>'HR-V',
            'marca_id'=>31,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>184,
            'precio'=>'34.835',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/honda/hrv.jpg'
        ]);

        //--------------------------------------------------------------------------------------------------------------
        //--------------------------------------------------------------------------------------------------------------

        // Hyundai i10

        Coche::create([
            'modelo'=>'HYUNDAI I10 1.2 Tecno 2C',
            'nombre'=>'i10',
            'marca_id'=>32,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>84,
            'precio'=>'18.720',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/hyundai/i10.jpg'
        ]);

        Coche::create([
            'modelo'=>'HYUNDAI I10 1.0 NLINE 2C',
            'nombre'=>'i10',
            'marca_id'=>32,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>100,
            'precio'=>'20.620',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/hyundai/i10.jpg'
        ]);

        // Hyundai i20

        Coche::create([
            'modelo'=>'HYUNDAI I20 1.2 MPI Essence',
            'nombre'=>'i20',
            'marca_id'=>32,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>84,
            'precio'=>'16.990',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/hyundai/i20.jpg'
        ]);

        Coche::create([
            'modelo'=>'HYUNDAI I20 1.0 TGDI 74kW Klass',
            'nombre'=>'i20',
            'marca_id'=>32,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>100,
            'precio'=>'19.665',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/hyundai/i20.jpg'
        ]);


        // Hyundai i30

        Coche::create([
            'modelo'=>'HYUNDAI I30 1.6 CRDI 100kW 48V NLine X DCT',
            'nombre'=>'i30',
            'marca_id'=>32,
            'carroceria_id'=>1,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>136,
            'precio'=>'34.370',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/hyundai/i30.jpg'
        ]);

        Coche::create([
            'modelo'=>'HYUNDAI I30 2.0 TGDI 206kW N Performance Sky DCT',
            'nombre'=>'i30',
            'marca_id'=>32,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>280,
            'precio'=>'44.900',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/hyundai/i30.jpg'
        ]);

        // Hyundai H-1 Travel

        Coche::create([
            'modelo'=>'HYUNDAI H1 TRAVEL 2.5 CRDi 100kW Tecno',
            'nombre'=>'H-1 Travel',
            'marca_id'=>32,
            'carroceria_id'=>4,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>136,
            'precio'=>'35.765',
            'plazas'=>8,
            'foto'=>'img/fotosCoches/hyundai/h1.jpg'
        ]);

        Coche::create([
            'modelo'=>'HYUNDAI H1 TRAVEL 2.5 CRDi 125kW Tecno Auto',
            'nombre'=>'H-1 Travel',
            'marca_id'=>32,
            'carroceria_id'=>4,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>170,
            'precio'=>'38.265',
            'plazas'=>8,
            'foto'=>'img/fotosCoches/hyundai/h1.jpg'
        ]);

        // Hyundai Santa Fe

        Coche::create([
            'modelo'=>'HYUNDAI SANTA FE 2.2 CRDi Klass 4x2 SR',
            'nombre'=>'Santa Fe',
            'marca_id'=>32,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>200,
            'precio'=>'42.006',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/hyundai/santafe.jpg'
        ]);

        Coche::create([
            'modelo'=>'HYUNDAI SANTA FE 1.6 TGDi HEV Style Auto 4x4',
            'nombre'=>'Santa Fe',
            'marca_id'=>32,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>230,
            'precio'=>'60.500',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/hyundai/santafe.jpg'
        ]);

        // Hyundai Tucson

        Coche::create([
            'modelo'=>'HYUNDAI TUCSON 1.6 CRDI 85kW 115CV Klass',
            'nombre'=>'Tucson',
            'marca_id'=>32,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>230,
            'precio'=>'30.900',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/hyundai/tucson.jpg'
        ]);

        Coche::create([
            'modelo'=>'HYUNDAI TUCSON 1.6 TGDI 169kW HEV Style Aut 4x4',
            'nombre'=>'Tucson',
            'marca_id'=>32,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>230,
            'precio'=>'48.600',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/hyundai/tucson.jpg'
        ]);


        //--------------------------------------------------------------------------------------------------------------
        //--------------------------------------------------------------------------------------------------------------

        // Kia Rio

        Coche::create([
            'modelo'=>'KIA RIO 1.0 TGDi 74kW MHEV iMT Concept',
            'nombre'=>'Rio',
            'marca_id'=>33,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>100,
            'precio'=>'18.200',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/kia/rio.jpg'
        ]);

        Coche::create([
            'modelo'=>'KIA RIO 1.0 TGDi 88kW MHEV GT Line DCT',
            'nombre'=>'Rio',
            'marca_id'=>33,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>120,
            'precio'=>'24.325',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/kia/rio.jpg'
        ]);


        // Kia Ceed

        Coche::create([
            'modelo'=>'KIA CEED 1.6 MHEV iMT 100kW Concept',
            'nombre'=>'Ceed',
            'marca_id'=>33,
            'carroceria_id'=>1,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>136,
            'precio'=>'23.800',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/kia/ceed.jpg'
        ]);

        Coche::create([
            'modelo'=>'KIA CEED 1.6 TGDi 150kW GT DCT',
            'nombre'=>'Ceed',
            'marca_id'=>33,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>204,
            'precio'=>'33.525',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/kia/ceed.jpg'
        ]);

        // Kia Ceed Tourer

        Coche::create([
            'modelo'=>'KIA CEED TOURER Tourer 1.6 CRDi 85kW Business',
            'nombre'=>'Ceed Tourer',
            'marca_id'=>33,
            'carroceria_id'=>2,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>115,
            'precio'=>'24.322',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/kia/ceedfa.jpg'
        ]);

        Coche::create([
            'modelo'=>'KIA CEED TOURER Tourer 1.5 MHEV 118kW1 GT Line DCT',
            'nombre'=>'Ceed Tourer',
            'marca_id'=>33,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>160,
            'precio'=>'32.275',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/kia/ceedfa.jpg'
        ]);

        // Kia Proceed

        Coche::create([
            'modelo'=>'KIA PROCEED 1.5 MHEV 118kW GT Line DCT',
            'nombre'=>'Proceed',
            'marca_id'=>33,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>160,
            'precio'=>'33.700',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/kia/proceed.jpg'
        ]);

        Coche::create([
            'modelo'=>'KIA PROCEED 1.6 TGDi 150kW GT DCT',
            'nombre'=>'Proceed',
            'marca_id'=>33,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>204,
            'precio'=>'36.475',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/kia/proceed.jpg'
        ]);

        // Kia Sorento

        Coche::create([
            'modelo'=>'KIA SORENTO 2.2 CRDi Drive DCT 4x2 7pl',
            'nombre'=>'Sorento',
            'marca_id'=>33,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>202,
            'precio'=>'48.700',
            'plazas'=>7,
            'foto'=>'img/fotosCoches/kia/sorento.jpg'
        ]);

        Coche::create([
            'modelo'=>'KIA SORENTO 1.6 TGDi HEV Emotion 4x4 7pl P.Luxury',
            'nombre'=>'Sorento',
            'marca_id'=>33,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>230,
            'precio'=>'60.400',
            'plazas'=>7,
            'foto'=>'img/fotosCoches/kia/sorento.jpg'
        ]);

        // Kia Sportage


        Coche::create([
            'modelo'=>'KIA SPORTAGE 1.6 MHEV Concept 100kW',
            'nombre'=>'Sportage',
            'marca_id'=>33,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>136,
            'precio'=>'60.400',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/kia/sportage.jpg'
        ]);

        Coche::create([
            'modelo'=>'KIA SPORTAGE 1.6 TGDi GT Line Xtreme 130kW DCT 4x4',
            'nombre'=>'Sportage',
            'marca_id'=>33,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>177,
            'precio'=>'41.150',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/kia/sportage.jpg'
        ]);

        //--------------------------------------------------------------------------------------------------------------
        //--------------------------------------------------------------------------------------------------------------

        // Mazda 2

        Coche::create([
            'modelo'=>'MAZDA MAZDA2 1.5 GE 66kW Origin',
            'nombre'=>'Mazda 2',
            'marca_id'=>34,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>90,
            'precio'=>'19.200',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mazda/2.jpg'
        ]);

        Coche::create([
            'modelo'=>'MAZDA MAZDA2 1.5 GE 66kW Black Tech Edition AT',
            'nombre'=>'Mazda 2',
            'marca_id'=>34,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>90,
            'precio'=>'22.994',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mazda/2.jpg'
        ]);

        // Mazda 3


        Coche::create([
            'modelo'=>'MAZDA MAZDA3 1.8 SKYACTIVD ORIGIN',
            'nombre'=>'Mazda 3',
            'marca_id'=>34,
            'carroceria_id'=>1,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>116,
            'precio'=>'27.192',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mazda/3.jpg'
        ]);

        Coche::create([
            'modelo'=>'MAZDA MAZDA3 2.0 SKYACTIVX ZENITH SAFETY RED AT',
            'nombre'=>'Mazda 3',
            'marca_id'=>34,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>181,
            'precio'=>'36.545',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mazda/3.jpg'
        ]);

        // Mazda 6 Familiar

        Coche::create([
            'modelo'=>'MAZDA MAZDA6 2.0 SKYACTIVEG 107kW Zenith WGN',
            'nombre'=>'Mazda 6 Familiar',
            'marca_id'=>34,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>145,
            'precio'=>'35.275',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mazda/6fa.jpg'
        ]);

        Coche::create([
            'modelo'=>'MAZDA MAZDA6 2.5 SKYACTIVEG 143kW Signature Auto WGN',
            'nombre'=>'Mazda 6 Familiar',
            'marca_id'=>34,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>194,
            'precio'=>'43.725',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mazda/6fa.jpg'
        ]);

        // Mazda 6

        Coche::create([
            'modelo'=>'MAZDA MAZDA6 2.0 SKYACTIVEG 107kW Zenith',
            'nombre'=>'Mazda 6',
            'marca_id'=>34,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>145,
            'precio'=>'34.775',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mazda/6.jpg'
        ]);

        Coche::create([
            'modelo'=>'MAZDA MAZDA6 2.5 SKYACTIVEG 143kW Signature Auto',
            'nombre'=>'Mazda 6',
            'marca_id'=>34,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>194,
            'precio'=>'43.225',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mazda/6.jpg'
        ]);

        // Mazda CX-30

        Coche::create([
            'modelo'=>'MAZDA CX30 SKYACTIVD 1.8 85 kW AT Zenith Safety',
            'nombre'=>'Mazda CX-30',
            'marca_id'=>34,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>116,
            'precio'=>'36.475',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mazda/cx3.jpg'
        ]);

        Coche::create([
            'modelo'=>'MAZDA CX30 SKYACTIVX 2.0 137kW AWD AT Zenith B.Saf',
            'nombre'=>'Mazda CX-30',
            'marca_id'=>34,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>186,
            'precio'=>'42.125',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mazda/cx3.jpg'
        ]);

        // Mazda CX-5

        Coche::create([
            'modelo'=>'MAZDA CX-5 2.2 150cv DE 4WD Style',
            'nombre'=>'Mazda CX-5',
            'marca_id'=>34,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>'42.125',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mazda/cx5.jpg'
        ]);

        Coche::create([
            'modelo'=>'MAZDA CX5 2.5 GE 143kW 194CV AWD AT Signature',
            'nombre'=>'Mazda CX-5',
            'marca_id'=>34,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>194,
            'precio'=>'46.100',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mazda/cx5.jpg'
        ]);

        //--------------------------------------------------------------------------------------------------------------
        //--------------------------------------------------------------------------------------------------------------


        // Mercedes Clase A

        Coche::create([
            'modelo'=>'MERCEDES-BENZ CLASE A A 180 d',
            'nombre'=>'Clase A',
            'marca_id'=>35,
            'carroceria_id'=>1,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>116,
            'precio'=>'35.231',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mercedes/ca.jpg'
        ]);

        Coche::create([
            'modelo'=>'MERCEDES-BENZ CLASE A MercedesAMG A 45 S 4MATIC',
            'nombre'=>'Clase A',
            'marca_id'=>35,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>421,
            'precio'=>'77.012',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mercedes/ca.jpg'
        ]);

        // Mercedes Cla Shooting Brake

        Coche::create([
            'modelo'=>'MERCEDES-BENZ CLA CLA 200 D DCT Shooting Brake',
            'nombre'=>'CLA Shooting Brake ',
            'marca_id'=>35,
            'carroceria_id'=>2,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>150,
            'precio'=>'41.960',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mercedes/clafa.jpg'
        ]);

        Coche::create([
            'modelo'=>'MERCEDES-BENZ CLA CLA MercedesAMG 45 4MATIC Shooting Brake',
            'nombre'=>'CLA Shooting Brake ',
            'marca_id'=>35,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>422,
            'precio'=>'82.099',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mercedes/clafa.jpg'
        ]);

        // Mercedes Clase C Estate


        Coche::create([
            'modelo'=>'MERCEDES-BENZ CLASE C C 220 d Estate',
            'nombre'=>'Clase C Estate ',
            'marca_id'=>35,
            'carroceria_id'=>2,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>194,
            'precio'=>'49.469',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mercedes/cfa.jpg'
        ]);

        Coche::create([
            'modelo'=>'MERCEDES-BENZ CLASE C MercedesAMG C 63 S Estate',
            'nombre'=>'Clase C Estate',
            'marca_id'=>35,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>510,
            'precio'=>'114.725',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mercedes/cfa.jpg'
        ]);

        // Mercedes Clase C coupe

        Coche::create([
            'modelo'=>'MERCEDES-BENZ CLASE C Coupe C 220 d',
            'nombre'=>'Clase C coupe',
            'marca_id'=>35,
            'carroceria_id'=>3,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>194,
            'precio'=>'48.481',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/mercedes/c.jpg'
        ]);

        Coche::create([
            'modelo'=>'MERCEDES-BENZ CLASE C Coupe MercedesAMG C 43 4MATIC',
            'nombre'=>'Clase C coupe',
            'marca_id'=>35,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>390,
            'precio'=>'79.175',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/mercedes/c.jpg'
        ]);

        // Mercedes Clase E coupe


        Coche::create([
            'modelo'=>'MERCEDES-BENZ CLASE E Coupe E 220 d 4MATIC',
            'nombre'=>'Clase E coupe',
            'marca_id'=>35,
            'carroceria_id'=>3,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>194,
            'precio'=>'63.825',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/mercedes/ce.jpg'
        ]);

        Coche::create([
            'modelo'=>'MERCEDES-BENZ CLASE E Coupe MercedesAMG E 53 4MATIC',
            'nombre'=>'Clase E coupe',
            'marca_id'=>35,
            'carroceria_id'=>3,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>435,
            'precio'=>'110.050',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/mercedes/ce.jpg'
        ]);

        //Mercedes Clase V

        Coche::create([
            'modelo'=>'MERCEDES-BENZ CLASE V 220 d Avantgarde Extralargo',
            'nombre'=>'Clase V',
            'marca_id'=>35,
            'carroceria_id'=>4,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>163,
            'precio'=>'69.305',
            'plazas'=>6,
            'foto'=>'img/fotosCoches/mercedes/cv.jpg'
        ]);

        Coche::create([
            'modelo'=>'MERCEDES-BENZ CLASE V 300 d Exclusive Largo',
            'nombre'=>'Clase V',
            'marca_id'=>35,
            'carroceria_id'=>4,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>239,
            'precio'=>'109.598',
            'plazas'=>6,
            'foto'=>'img/fotosCoches/mercedes/cv.jpg'
        ]);


        // Mercedes Clase G

        Coche::create([
            'modelo'=>'MERCEDES-BENZ CLASE G G 400 D',
            'nombre'=>'Clase G',
            'marca_id'=>35,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>330,
            'precio'=>'126.725',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mercedes/cg.jpg'
        ]);

        Coche::create([
            'modelo'=>'MERCEDES-BENZ CLASE G MercedesAMG G 63',
            'nombre'=>'Clase G',
            'marca_id'=>35,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>585,
            'precio'=>'183.150',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mercedes/cg.jpg'
        ]);

        // Mercedes GLC

        Coche::create([
            'modelo'=>'MERCEDES-BENZ CLASE GLC GLC 300 d 4MATIC',
            'nombre'=>'Clase GLC',
            'marca_id'=>35,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>245,
            'precio'=>'57.863',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mercedes/glc.jpg'
        ]);

        Coche::create([
            'modelo'=>'MERCEDES-BENZ CLASE GLC MercedesAMG GLC 63 S 4MATIC',
            'nombre'=>'Clase GLC',
            'marca_id'=>35,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>510,
            'precio'=>'124.800',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mercedes/glc.jpg'
        ]);

        //Mercedes GLE Coupe


        Coche::create([
            'modelo'=>'MERCEDES-BENZ GLE COUPE GLE 350 d 4MATIC',
            'nombre'=>'Clase GLE Coupe',
            'marca_id'=>35,
            'carroceria_id'=>5,
            'combustible'=>'Diesel',
            'cambio'=>'Automatico',
            'potencia'=>272,
            'precio'=>'90.638',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mercedes/gle.jpg'
        ]);

        Coche::create([
            'modelo'=>'MERCEDES-BENZ GLE COUPE MercedesAMG GLE 63 S 4MATIC',
            'nombre'=>'Clase GLE Coupe',
            'marca_id'=>35,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>612,
            'precio'=>'183.725',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mercedes/gle.jpg'
        ]);

        //--------------------------------------------------------------------------------------------------------------
        //--------------------------------------------------------------------------------------------------------------

        // Mini mini

        Coche::create([
            'modelo'=>'Mini Cooper',
            'nombre'=>'Mini',
            'marca_id'=>36,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>136,
            'precio'=>'24.599',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/mini/mini.jpg'
        ]);

        Coche::create([
            'modelo'=>'Mini Cooper S',
            'nombre'=>'Mini',
            'marca_id'=>36,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>178,
            'precio'=>'29.499',
            'plazas'=>4,
            'foto'=>'img/fotosCoches/mini/mini.jpg'
        ]);

        // Mini Clubman

        Coche::create([
            'modelo'=>'MINI CLUBMAN One D',
            'nombre'=>'CLUBMAN',
            'marca_id'=>36,
            'carroceria_id'=>2,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>178,
            'precio'=>'28.700',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mini/clubman.jpg'
        ]);

        Coche::create([
            'modelo'=>'MINI CLUBMAN John Cooper Works ALL4',
            'nombre'=>'CLUBMAN',
            'marca_id'=>36,
            'carroceria_id'=>2,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>306,
            'precio'=>'48.100',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mini/clubman.jpg'
        ]);

        // Mini Countryman

        Coche::create([
            'modelo'=>'MINI COUNTRYMAN One D',
            'nombre'=>'COUNTRYMAN',
            'marca_id'=>36,
            'carroceria_id'=>1,
            'combustible'=>'Diesel',
            'cambio'=>'Manual',
            'potencia'=>116,
            'precio'=>'30.650',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mini/countryman.jpg'
        ]);

        Coche::create([
            'modelo'=>'MINI COUNTRYMAN Cooper S ALL4',
            'nombre'=>'COUNTRYMAN',
            'marca_id'=>36,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Automatico',
            'potencia'=>178,
            'precio'=>'39.350',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mini/countryman.jpg'
        ]);

        //--------------------------------------------------------------------------------------------------------------
        //--------------------------------------------------------------------------------------------------------------

        // Mitsubishi Space star

        Coche::create([
            'modelo'=>'MITSUBISHI SPACE STAR 120 MPI Motion',
            'nombre'=>'Space Star',
            'marca_id'=>37,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>71,
            'precio'=>'13.150',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mitsubishi/spacestar.jpg'
        ]);

        Coche::create([
            'modelo'=>'MITSUBISHI SPACE STAR 120 MPI Kaiteki CVT',
            'nombre'=>'Space Star',
            'marca_id'=>37,
            'carroceria_id'=>1,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>71,
            'precio'=>'16.450',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mitsubishi/spacestar.jpg'
        ]);

        // Mitsubishi ASX

        Coche::create([
            'modelo'=>'MITSUBISHI ASX 200 MPI Challenge',
            'nombre'=>'ASX',
            'marca_id'=>37,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>'24.900',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mitsubishi/asx.jpg'
        ]);

        Coche::create([
            'modelo'=>'MITSUBISHI ASX 200 MPI CVT Kaiteki',
            'nombre'=>'ASX',
            'marca_id'=>37,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>'33.000',
            'plazas'=>5,
            'foto'=>'img/fotosCoches/mitsubishi/asx.jpg'
        ]);

        // Mitsubishi Outlander

        Coche::create([
            'modelo'=>'MITSUBISHI OUTLANDER 200 MPI Motion CVT 2WD',
            'nombre'=>'Outlander',
            'marca_id'=>37,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>'31.400',
            'plazas'=>7,
            'foto'=>'img/fotosCoches/mitsubishi/out.jpg'
        ]);

        Coche::create([
            'modelo'=>'MITSUBISHI OUTLANDER 200 MPI Kaiteki CVT 4WD',
            'nombre'=>'Outlander',
            'marca_id'=>37,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>'40.600',
            'plazas'=>7,
            'foto'=>'img/fotosCoches/mitsubishi/out.jpg'
        ]);

        
        //--------------------------------------------------------------------------------------------------------------
        //--------------------------------------------------------------------------------------------------------------

        // Nissan Leaf

        Coche::create([
            'modelo'=>'MITSUBISHI OUTLANDER 200 MPI Kaiteki CVT 4WD',
            'nombre'=>'Outlander',
            'marca_id'=>37,
            'carroceria_id'=>5,
            'combustible'=>'Gasolina',
            'cambio'=>'Manual',
            'potencia'=>150,
            'precio'=>'40.600',
            'plazas'=>7,
            'foto'=>'img/fotosCoches/mitsubishi/out.jpg'
        ]);




























































    }
}
