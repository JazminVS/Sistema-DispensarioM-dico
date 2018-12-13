<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class TipoMedicamento extends Model
{
    //
    protected $fillable = ['descripcion'];

    protected $table = 'tipo_medicamento';
}
