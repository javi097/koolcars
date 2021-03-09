<?php

namespace App\Http\Controllers;

use App\Models\Coche;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Faker\Provider\Image;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usuarios.perfil');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('usuarios.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'nombre'=>['required'],
            'nombreUsuario'=>['required'],
            'fotoPerfil'=>['image']
        ]);

    
        $user->nombre = $request['nombre'];
        $user->nombreUsuario = $request['nombreUsuario'];

        if (isset($request['fotoPerfil'])) {
            $file = $request['fotoPerfil'];
            $nombre = 'fotoPerfil/'.time().'_'.$file->getClientOriginalName();
            \Storage::disk('public')->put($nombre, \File::get($file));

            $imagenOld = $user->fotoPerfil;
            if (basename($imagenOld)!="default.jpg") {
                unlink($imagenOld);
            }

            $user->fotoPerfil="img/$nombre";
        }

        $user->update();


        Alert::success('Usuario modificado', 'El perfil se ha actualizado correctamente');
        return redirect()->route('users.index',compact('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }


    public function cochesFav(Coche $coch){

        $user= auth()->user();
        $user->addFavorite($coch);
        Alert::success('Favorito creado', 'El coche se ha guardado como favorito');
        return \Redirect::back();

        
    }


    public function mostrarFav(){

        $user= auth()->user();
        $coches = $user->favorite(Coche::class);

        return view('coches.fav', compact('user', 'coches'));

    }

    public function deleteFav(Coche $coch){

        $user = auth()->user();
        $user->removeFavorite($coch);
        Alert::success('Favorito borrado', 'El coche se ha borrado de favoritos');

        return \Redirect::back();
    }
}
