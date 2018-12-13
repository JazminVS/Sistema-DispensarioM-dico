<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class TipoSano extends Model
{
    //
    protected $fillable = ['descripcion'];

    protected $table = 'tipo_sano';
}
