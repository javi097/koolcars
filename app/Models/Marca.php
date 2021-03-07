<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'nombre','logo'
    ];

    //Relación 1:N entre Coches y Marcas
    // Una marca puede tener varios coches

    public function coches(){
        return $this->hasMany(Coche::class);
    }

    public function scopeMarcas($query,$v){
        if($v=='%'){
            return $query->where('nombre','like',$v)
            ->orWhereNull('nombre');
        }

        if($v==-1){
            return $query->whereNull('nombre');
        }
        if(!isset($v)){
            return $query->where('nombre','like','%')
            ->orWhereNull('nombre');
        }
        return $query->where('nombre',$v);
    }
 
}
