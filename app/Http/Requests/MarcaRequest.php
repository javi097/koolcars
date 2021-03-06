<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;


class MarcaRequest extends FormRequest {

    /* Determina si el usuario está autorizado para realizar esta solicitud */

    public function authorize(){
        return true;
    }

    /* Reglas de validación para aplicarlas a la solicitud */

    public function rules(){

        if($this->method()== "PUT"){

            return [

                'nombre'=>['required', 'unique:marcas,nombre,',$this->id, 'max:20'],
                'logo'=>['image','nullable']
            ];
        }else{

            return [

                'nombre'=>['required', 'unique:marcas,nombre,','max:20'],
                'logo'=>['image','nullable']
            ];
        }
    }


    public function messages(){

        return [

                'nombre.required'=> 'Debes introducir un nombre de una marca',
                'nombre.unique'=> 'Ya existe una marca con este nombre',
                'logo.image'=>'Formato incorrecto, solo válido formatos de imagen'
        ];
    }

}


?>