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
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function adminPanel(){
        return view('admin.panel');
    }

    /* ----------------------USUARIOS*-------------------------------------------*/

    //Metodo para mostrar los usuarios
    public function usuList(){
        $usuarios = User::orderBy('nombre')->simplePaginate(6);
        
        return view('admin.users', compact('usuarios'));
    }

    /* Metodo para borrar un usuario*/
    public function usuDestroy(User $user){

        $user->delete();
    
        Alert::success('Usuario borrado', 'El usuario ha sido borrado correctamente');
        return \Redirect::back();
    }

    /* --------------------------COCHES---------------------------------------------*/

    //Metodo para mostrar los coches 
    public function cochesList(){
        $coches = Coche::orderBy('modelo')->simplePaginate(6);

        return view('admin.coches.coches', compact('coches'));
    }

    //Metodo para eliminar un coche
    public function cochesDestroy(Coche $coch){

        $coch->delete();
        Alert::success('Coche borrado', 'El coche ha sido borrado correctamente');

        return \Redirect::back();
    }

    //Metodo para mostrar la pagina de creacion del coche
    public function cochesCreate(){
        $marcas=Marca::orderBy('nombre')->get();
        $carrocerias=Carroceria::orderBy('nombre')->get();
        return view('admin.coches.createCoche',compact('marcas','carrocerias'));
    }

    //Metodo para crear un coche
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

    //Metodo que envia a la vista de editar coche
    public function cochesEdit(Coche $coch){
        
        return view('admin.coches.editCoche', compact('coch'));
    }

    //Metodo para editar un coche
    public function cochesUpdate(Request $request, Coche $coch){

         $request->validate([
             'modelo'=>['required'],
             'nombre'=>['required'],
             'combustible'=>['required'],
             'cambio'=>['required'],
             'potencia'=>['required'],
             'precio'=>['required'],
             'plazas'=>['required'],
             'foto' => ['image']
         ]);

        //Modelo
        $coch->modelo=$request['modelo'];
        //Nombre
        $coch->nombre=$request['nombre'];
        //Combustible
        $coch->combustible=$request['combustible'];
        //Cambio
        $coch->cambio=$request['cambio'];
        //Potencia
        $coch->potencia=$request['potencia'];
        //Precio
        $coch->precio=$request['precio'];
        //Plazas
        $coch->plazas=$request['plazas'];
    

        $coch->update();
       Alert::success('Coche modificado', 'El coche se ha modificado correctamente');
       return redirect()->route('admin.coches');
    }

    /* ------------------------MARCAS--------------------------------------------------*/

    //Metodo para mostrar las marcas
    public function marcaList(){
        $marcas = Marca::orderBy('nombre')->simplePaginate(6);

        return view('admin.marcas.marcas', compact('marcas'));
    }

    //Metodo para eliminar una marca
    public function marcaDestroy(Marca $marca){

        $marca->delete();
        Alert::success('Marca borrada', 'La marca ha sido borrada correctamente');
        
        return \Redirect::back();
    }

    //Metodo para mostrar la vista de creacion de la marca
    public function marcasCreate(){
        return view('admin.marcas.createMarca');
    }

    //Metodo para crear una marca
    public function marcaStore(MarcaRequest $request){
        $datos= $request->validated();

        $marcas = Marca::orderBy('nombre')->simplePaginate(6);

        $marca= new Marca();
        //Nombre
        $marca->nombre=$datos['nombre'];
        //Logo

        
        
        if(isset($datos['logo']) && $datos['logo']!=null){

            $file = $datos['logo'];
             $nom = 'logoMarca/marcaNuevo/'.time().'_'.$file->getClientOriginalName();
            \Storage::disk('public')->put($nom, \File::get($file));
             $marca->logo="img/$nom";

            
        
        }

        $marca->save();
        Alert::success('Marca creada', 'La marca se ha creado correctamente');

        return view('admin.marcas.marcas', compact('marcas'));
    }

   
    //Metodo que muestra la vista para editar una marca
    public function marcaEdit(Marca $marca){
        
        return view('admin.marcas.editMarca',compact('marca'));
    }

    //Metodo para editar una marca
    public function marcaUpdate(Request $request, Marca $marca){

            $request->validate([
            'nombre'=>['required'],
            'logo'=>['image']
            ]);

            $marca->nombre = $request['nombre'];

        if (isset($request['logo'])) {
            $file = $request['logo'];
            $nombre = 'logoMarca/'.time().'_'.$file->getClientOriginalName();
            \Storage::disk('public')->put($nombre, \File::get($file));

            $imagenOld = $marca->logo;
            if (basename($imagenOld)!="default.jpg") {
                unlink($imagenOld);
            }

            $marca->logo="img/$nombre";
        }

        $marca->update();
     
        
       Alert::success('Marca modificada', 'La marca se ha modificado correctamente');
       return redirect()->route('admin.marcas');
        
    }

    /*------------------ Perfil del Administrador--------------------------------*/

    //Mostrar Perfil del Administrador
    public function mostrarPerfil(){
        
        return view('admin.perfil.perfil');
    }
    
    //Editar perfil del Administrador
    public function editPerfil(User $user){

        return view('admin.perfil.editPerfil', compact('user'));
    }

    //Actualizar perfil del Administrador
    public function updatePerfil(Request $request, User $user){

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
        return redirect()->route('admin.perfil',compact('user'));
    }

}
