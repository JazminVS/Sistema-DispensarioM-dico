<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $fillable = ['descripcion'];

    protected $table = 'tipo_genero';
}
