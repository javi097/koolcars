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
    public function marcaUpdate(MarcaRequest $request, Marca $marca){

        $datos= $request->validated();

        $marca->nombre=$datos['nombre'];
     
        //Foto
        if(isset($datos['logo']) && $datos['logo']!=null){

            $file = $datos['logo'];
            $nom = 'logoMarca/marcaNuevo/'.time().'_'.$file->getClientOriginalName();
            \Storage::disk('public')->put($nom, \File::get($file));

            $imagenAntigua = $marca->logo;
            if(basename($imagenAntigua)!="default.jpg"){
                unlink($imagenAntigua);
            }

            $marca->logo="img/$nom";
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

        // //compruebo si he subido archiivo
        // if($request->has('fotoPerfil')){
        //     $request->validate([
        //         'fotoPerfil'=>['image']
        //     ]);
        //     //Todo bien hemos subido un archivo y es de imagen
        //     $file=$request->file('fotoPerfil');
        //     //Creo un nombre
        //     $nombre='fotoPerfil/'.time().'_'.$file->getClientOriginalName();
        //     //Guardo el archivo de imagen
        //     Storage::disk('public')->put($nombre, \File::get($file));
        //     if(basename($user->fotoPerfil!='default.jpg')){
        //         unlink($user->fotoPerfil);
        //     }
        //     $user->update($request->all());
        //     $user->update(['fotoPerfil'=>"img/$nombre"]);
        // }
        // else{
        //     $user->update($request->all());
        // }

       
        
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
