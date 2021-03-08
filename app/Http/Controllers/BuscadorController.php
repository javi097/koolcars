<?php

namespace App\Http\Controllers;

use App\Models\Coche;
use App\Models\Marca;
use App\Models\Carroceria;
use Illuminate\Http\Request;

class BuscadorController extends Controller
{
    public function indexBusqueda(Request $request){
        $modelo = $request->get('modelo');
        $marca = $request->get('marca_id');
        $carroceria = $request->get('carroceria_id');
        
        $marcas=Marca::orderBy('nombre')->get();
        $carrocerias=Carroceria::orderBy('nombre')->get();
        
        if($marca == "Seleccione la marca"){
            $coches = Coche::orderBy('modelo','DESC')->where([
                ['modelo','like',"%$modelo%"],
                ['carroceria_id','like',"%$carroceria%"]
            ])->simplePaginate(6);
        }else if($carroceria == "Seleccione la carroceria" ){
            $coches = Coche::orderBy('modelo','DESC')->where([
                ['modelo','like',"%$modelo%"],
                ['marca_id','like',"%$marca%"]
            ])->simplePaginate(6);
        }
        
        if($marca == "Seleccione la marca" && $carroceria == "Seleccione la carroceria"){
            $coches = Coche::orderBy('modelo','DESC')->where('modelo','like',"%$modelo%")->simplePaginate(6);
        }else if($marca != "Seleccione la marca" && $carroceria != "Seleccione la carroceria"){
            $coches = Coche::orderBy('modelo','DESC')->where([
                ['modelo','like',"%$modelo%"],
                ['marca_id','like',"%$marca%"],
                ['carroceria_id','like',"%$carroceria%"]
            ])->simplePaginate(6);
        }

        return view ('coches.encuentra', compact('coches', 'request', 'marcas', 'carrocerias'));
    }

    /* Buscadores para cada una de las carrocerias por marcas*/

    public function compaMarca(Request $request){
        
        $marca = $request->get('marca_id');
        $carroceria = $request->get('carroceria_id');

        $marcas=Marca::orderBy('nombre')->get();
        $carrocerias=Carroceria::orderBy('nombre')->get();
        
        if($marca != "Seleccione la marca"){
            $coches = Coche::orderBy('modelo','DESC')->where([
                ['marca_id','like',"%$marca%"],
                ['carroceria_id','=',"1"]
            ])->simplePaginate(6);
        }
        return view ('coches.compactos', compact('coches', 'request', 'marcas', 'carrocerias'));
    }

    public function coupeMarca(Request $request){
        $marca = $request->get('marca_id');
        $carroceria = $request->get('carroceria_id');

        $marcas=Marca::orderBy('nombre')->get();
        $carrocerias=Carroceria::orderBy('nombre')->get();

        if($marca != "Seleccione la marca"){
            $coches = Coche::orderBy('modelo','DESC')->where([
                ['marca_id','like',"%$marca%"],
                ['carroceria_id','=',"3"]
            ])->simplePaginate(6);
        }
        return view ('coches.coupe', compact('coches', 'request', 'marcas', 'carrocerias'));
    }

    public function famMarca(Request $request){
        $marca = $request->get('marca_id');
        $carroceria = $request->get('carroceria_id');

        $marcas=Marca::orderBy('nombre')->get();
        $carrocerias=Carroceria::orderBy('nombre')->get();

        if($marca != "Seleccione la marca"){
            $coches = Coche::orderBy('modelo','DESC')->where([
                ['marca_id','like',"%$marca%"],
                ['carroceria_id','=',"2"]
            ])->simplePaginate(6);
        }
        return view ('coches.fam', compact('coches', 'request', 'marcas', 'carrocerias'));
    }

    public function monoMarca(Request $request){
        $marca = $request->get('marca_id');
        $carroceria = $request->get('carroceria_id');

        $marcas=Marca::orderBy('nombre')->get();
        $carrocerias=Carroceria::orderBy('nombre')->get();

        if($marca != "Seleccione la marca"){
            $coches = Coche::orderBy('modelo','DESC')->where([
                ['marca_id','like',"%$marca%"],
                ['carroceria_id','=',"4"]
            ])->simplePaginate(6);
        }
        return view ('coches.mono', compact('coches', 'request', 'marcas', 'carrocerias'));
    }

    public function suvMarca(Request $request){
        $marca = $request->get('marca_id');
        $carroceria = $request->get('carroceria_id');

        $marcas=Marca::orderBy('nombre')->get();
        $carrocerias=Carroceria::orderBy('nombre')->get();
        
        if($marca != "Seleccione la marca"){
            $coches = Coche::orderBy('modelo','DESC')->where([
                ['marca_id','like',"%$marca%"],
                ['carroceria_id','=',"5"]
            ])->simplePaginate(6);
        }
        return view ('coches.suv', compact('coches', 'request', 'marcas', 'carrocerias'));
    }
}
