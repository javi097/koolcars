<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'modelo',
        'marcas_id',
        'carroceria_id',
        'combustible',
        'cambio',
        'potencia',
        'precio',
        'plazas',
        'foto'
    ];

    //Relación 1:N entre Coches y Marcas
    // Un coche solo puede ser de una marca

   public function marca(){
       return $this->belongsTo(Marca::class);
   }

   public function carroceria(){
       return $this->belongsTo(Carroceria::class);
   }

   public function scopeModelo($query, $modelo)
   {
       if ($modelo) {
           return $query->orWhere('modelo', 'LIKE', "%$modelo%");
       }  
    }

}
