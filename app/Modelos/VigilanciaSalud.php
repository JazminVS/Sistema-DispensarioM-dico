<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class VigilanciaSalud extends Model
{
    //
    protected $fillable = ['descripcion'];

    protected $table = 'tipo_vigilancia_salud';
}
