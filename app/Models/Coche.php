<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;
    protected $fillable=['modelo','marcas_id','carroceria_id','combustible','cambio','potencia','precio','plazas','foto'];

}
