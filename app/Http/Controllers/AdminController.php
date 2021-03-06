<?php

namespace App\Http\Controllers;
use App\Models\Coche;
use App\Models\Marca;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\CocheRequest;
use App\Http\Requests\MarcaRequest;
use App\Models\Carroceria;
use Faker\Provider\Image;

class AdminController extends Controller
{
    public function adminPanel(){
        return view('admin.panel');
    }

    /* Metodo para mostrar,borrar,crear y editar los USUARIOS*/

    public function usuList(){
        $usuarios = User::orderBy('nombre')->simplePaginate(6);
        
        return view('admin.users', compact('usuarios'));
    }


    public function usuDestroy(User $user){

        $user->delete();
    
        Alert::success('Usuario borrado', 'El usuario ha sido borrado correctamente');
        return \Redirect::back();
    }

    /* Metodo para mostrar,borrar,crear y editar los COCHES*/

    public function cochesList(){
        $coches = Coche::orderBy('modelo')->simplePaginate(6);

        return view('admin.coches.coches', compact('coches'));
    }



    public function cochesDestroy(Coche $coch){

        $coch->delete();
        Alert::success('Coche borrado', 'El coche ha sido borrado correctamente');

        return \Redirect::back();
    }

    public function cochesCreate(){
        $marcas=Marca::orderBy('nombre')->get();
        $carrocerias=Carroceria::orderBy('nombre')->get();
        return view('admin.coches.createCoche',compact('marcas','carrocerias'));
    }

    public function cochesStore(CocheRequest $request){

        $datos= $request->validated();

        $coches = Coche::orderBy('modelo')->simplePaginate(6);

        $coche= new Coche();
        //Modelo
        $coche->modelo=$datos['modelo'];
        //Nombre
        $coche->nombre=$datos['nombre'];
        //Marca_id
        $coche->marca_id=$datos['marca_id'];
        //Carroceria_id
        $coche->carroceria_id=$datos['carroceria_id'];
        //Combustible
        $coche->combustible=$datos['combustible'];
        //Cambio
        $coche->cambio=$datos['cambio'];
        //Potencia
        $coche->potencia=$datos['potencia'];
        //Precio
        $coche->precio=$datos['precio'];
        //Plazas
        $coche->plazas=$datos['plazas'];
        //Foto
        
        if(isset($datos['foto']) && $datos['foto']!=null){

            $file = $datos['foto'];
            $nom = 'fotosCoches/cochesNuevos/'.time().'_'.$file->getClientOriginalName();
            \Storage::disk('public')->put($nom, \File::get($file));
            $coche->foto="img/$nom";
        }

        $coche->save();
        Alert::success('Coche creado', 'El coche se ha creado correctamente');

        return view('admin.coches.coches', compact('coches'));
    }


    public function cochesEdit(Coche $coch){
        
        return view('admin.coches.editCoche', compact('coch'));
    }

    public function cochesUpdate(CocheRequest $request, Coche $coch){
        

        $datos= $request->validated();

        //Modelo
        $coch->modelo=$datos['modelo'];
        //Nombre
        $coch->nombre=$datos['nombre'];
        //Combustible
        $coch->combustible=$datos['combustible'];
        //Cambio
        $coch->cambio=$datos['cambio'];
        //Potencia
        $coch->potencia=$datos['potencia'];
        //Precio
        $coch->precio=$datos['precio'];
        //Plazas
        $coch->plazas=$datos['plazas'];
        //Foto
        
        if(isset($datos['foto']) && $datos['foto']!=null){

            $file = $datos['foto'];
            $nom = 'fotosCoches/cochesNuevos/'.time().'_'.$file->getClientOriginalName();
            \Storage::disk('public')->put($nom, \File::get($file));

            $imagenAntigua = $coch->foto;
            if(basename($imagenAntigua)!="default.jpg"){
                unlink($imagenAntigua);
            }

            $coch->foto="img/$nom";
        }

        $coch->update();
        Alert::success('Coche modificado', 'El coche se ha modificado correctamente');

        return redirect()->route('admin.coches');

    }

    /* Metodos para mostrar,borrar,crear y editar las MARCAS*/

    public function marcaList(){
        $marcas = Marca::orderBy('nombre')->simplePaginate(6);

        return view('admin.marcas.marcas', compact('marcas'));
    }


    public function marcaDestroy(Marca $marca){

        $marca->delete();
        Alert::success('Marca borrada', 'La marca ha sido borrada correctamente');
        
        return \Redirect::back();
    }

    public function marcaStore(MarcaRequest $request){
        $datos= $request->validated();

        $marcas = Marca::orderBy('nombre')->simplePaginate(6);

        $marca= new Marca();
        //Nombre
        $marca->nombre=$datos['nombre'];
        //Logo

        
        
        if(isset($datos['logo']) && $datos['logo']!=null){

            $file = $datos['logo'];
             $nom = 'logoMarca'.time().'_'.$file->getClientOriginalName();
            \Storage::disk('public')->put($nom, \File::get($file));
             $marca->logo="img/$nom";
        
        }

        $marca->save();
        Alert::success('Marca creada', 'La marca se ha creado correctamente');

        return view('admin.marcas.marcas', compact('marcas'));
    }

    public function marcasCreate(){
        return view('admin.marcas.createMarca');
    }

    public function marcaEdit(Marca $marca){
        
        return view('admin.marcas.editMarca',compact('marca'));
    }

    public function marcaUpdate(Marca $marca){
        
    }


}
