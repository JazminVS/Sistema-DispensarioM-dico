<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class TipoDiscapacidad extends Model
{
    protected $fillable = ['descripcion'];

    protected $table = 'tipo_discapacidad';
}
