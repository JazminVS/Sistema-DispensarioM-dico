<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class NivelInstruccion extends Model
{
    protected $fillable = ['descripcion'];

    protected $table = 'tipo_instruccion';
}
