<?php

namespace App\Http\Controllers;
use App\Models\Marca;
use App\Models\Coche;
use App\Models\Carroceria;
use Illuminate\Http\Request;

class CocheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $coches = Coche::orderBy('modelo')->simplePaginate(6);
        $modelo=$request->get('modelo');
        $marcas=Marca::orderBy('nombre')->get();
        $carrocerias=Carroceria::orderBy('nombre')->get();
        return view('coches.encuentra',compact('coches','marcas','carrocerias', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coche  $coche
     * @return \Illuminate\Http\Response
     */
    public function show(Coche $coche)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coche  $coche
     * @return \Illuminate\Http\Response
     */
    public function edit(Coche $coche)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Coche  $coche
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coche $coche)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coche  $coche
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coche $coche)
    {
        //
    }

    public function mostrarCompactos(){

        $coches = Coche::orderBy('modelo','DESC')->where([
            ['carroceria_id','=',"1"]
        ])->simplePaginate(6);
        $marcas=Marca::orderBy('nombre')->get();
        
        return view('coches.compactos', compact('coches', 'marcas'));
    }
    public function mostrarCoupe(){
        $coches = Coche::orderBy('modelo','DESC')->where([
            ['carroceria_id','=',"3"]
        ])->simplePaginate(6);
        $marcas=Marca::orderBy('nombre')->get();

        return view('coches.coupe',compact('coches','marcas'));
    }
    public function mostrarSuv(){
        $coches = Coche::orderBy('modelo','DESC')->where([
            ['carroceria_id','=',"5"]
        ])->simplePaginate(6);
        $marcas=Marca::orderBy('nombre')->get();

        return view('coches.suv',compact('coches', 'marcas'));
    }
    public function mostrarFam(){
        $coches = Coche::orderBy('modelo','DESC')->where([
            ['carroceria_id','=',"2"]
        ])->simplePaginate(6);
        $marcas=Marca::orderBy('nombre')->get();

        return view('coches.fam',compact('coches', 'marcas'));
    }
    public function mostrarMono(){
        $coches = Coche::orderBy('modelo','DESC')->where([
            ['carroceria_id','=',"4"]
        ])->simplePaginate(6);
        $marcas=Marca::orderBy('nombre')->get();

        return view('coches.mono',compact('coches', 'marcas'));
    }

    //---------------------------------------------------------------------

    
}
