<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class TipoInstruccion extends Model
{
    //
    protected $fillable = ['descripcion'];

    protected $table = 'tipo_instruccion';
}
