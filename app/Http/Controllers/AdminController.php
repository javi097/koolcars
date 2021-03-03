<?php

namespace App\Http\Controllers;
use App\Models\Coche;
use App\Models\Marca;
use App\Models\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function adminPanel(){
        return view('admin.panel');
    }

    /* Metodo para mostrar los usuarios*/

    public function usuList(){
        $usuarios = User::orderBy('nombre')->get();
        
        return view('admin.users', compact('usuarios'));
    }

    //Método para borrar los usuarios

    public function usuDestroy(User $user){

        $user->delete();
        $usuarios = User::orderBy('nombre')->get();
    
        return view('admin.users',compact('usuarios') );
    }

    /* Metodo para mostrar los coches*/

    public function cochesList(){
        $coches = Coche::orderBy('modelo')->get();

        return view('admin.coches', compact('coches'));
    }

    //Método para borrar los coches

    public function cochesDestroy(Coche $coch){

        $coch->delete();
        $coches = Coche::orderBy('modelo')->get();

        return view('admin.coches', compact('coches'));
    }

    /* Metodo para mostrar las marcas*/

    public function marcaList(){
        $marcas = Marca::orderBy('nombre')->get();

        return view('admin.marcas', compact('marcas'));
    }

    //Método para borrar las marcas

    public function marcaDestroy(Marca $marca){

        $marca->delete();
        $marcas = Marca::orderBy('nombre')->get();
        
        return view('admin.marcas', compact('marcas'));
    }


}
