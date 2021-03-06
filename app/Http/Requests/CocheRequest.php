<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;


class CocheRequest extends FormRequest {

    /* Determina si el usuario está autorizado para realizar esta solicitud */

    public function authorize(){
        return true;
    }

    /* Reglas de validación para aplicarlas a la solicitud */

    public function rules(){

        if($this->method()== "PUT"){

            return [

                'modelo'=>['required', 'unique:coches,modelo,',$this->id, 'max:50'],
                'nombre'=>['required','max:50'],
                'marca_id'=>['required'],
                'carroceria_id'=>['required'],
                'combustible'=>['required','max:8'],
                'cambio'=>['required','max:10'],
                'potencia'=>['required','max:4'],
                'precio'=>['required'],
                'plazas'=>['required','max:1'],
                'foto'=>['image','nullable']
            ];
        }else{

            return [

                'modelo'=>['required', 'unique:coches,modelo,','max:50'],
                'nombre'=>['required','max:50'],
                'marca_id'=>['required'],
                'carroceria_id'=>['required'],
                'combustible'=>['required','max:8'],
                'cambio'=>['required','max:10'],
                'potencia'=>['required','max:4'],
                'precio'=>['required'],
                'plazas'=>['required','max:1'],
                'foto'=>['image','nullable']
            ];
        }
    }


    public function messages(){

        return [

                'modelo.required'=> 'Debes introducir un modelo para el coche',
                'modelo.unique'=> 'Ya existe un coche con este nombre',
                'nombre.required'=> 'Debes introducir un nombre para el coche',
                'marca_id.required'=>'Debes introducir una marca',
                'carroceria_id.required'=>'Debes introducir una carroceria',
                'combustible.required'=>'Debes introducir un tipo de combustible',
                'cambio.required'=>'Debes introducir un tipo de caja de cambios',
                'potencia.required'=>'Debes introducir una potencia para el coche',
                'precio.required'=>'Debes introducir un precio',
                'plazas.required'=>'Debes introducir un numero de plazas del coche',
                'foto.image'=>'Formato incorrecto, solo válido formatos de imagen'
        ];
    }

}



?>