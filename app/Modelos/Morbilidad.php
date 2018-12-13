<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Morbilidad extends Model
{
    //
    protected $fillable = ['descripcion'];

    protected $table = 'tipo_morbilidad';
}
