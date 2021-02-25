<?php

namespace App\Http\Controllers;
use App\Models\Marca;
use App\Models\Coche;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = Marca::orderBy('nombre')->get();
    
        return view('marcas.marca', compact('marcas'));
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
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function show(Marca $marca)
    {   
        $coches = $marca->coches()->get();

        return view('marcas.modelo', compact('marca', 'coches'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function edit(Marca $marca)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marca $marca)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marca  $marca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marca $marca)
    {
        //
    }


    //------------------------------------------------
    public function cochesCarroceria(int $id){

        echo("<script>console.log('PHP: " . $id . "');</script>");
        $marca = Marca::find($id);
        $coches = $marca->coches()->get();


        $cocheCompacto = $marca->coches()->get();
        $cocheFamiliar = $marca->coches()->get();
        $cocheCoupe = $marca->coches()->get();
        $cocheMonovolumen = $marca->coches()->get();
        $cocheSuv = $marca->coches()->get();


        $compactoResult = json_decode($cocheCompacto, true);
        $familiarResult = json_decode($cocheFamiliar, true);
        $coupeResult = json_decode($cocheCoupe, true);
        $monovolumenResult = json_decode($cocheMonovolumen, true);
        $suvResult = json_decode($cocheSuv, true);
        $marcaJson = json_decode($marca, true);

        
        return view('carrocerias.coches', compact('marca', 'coches', 'compactoResult','familiarResult' ,'coupeResult', 'monovolumenResult', 'suvResult' ));

    }
}
