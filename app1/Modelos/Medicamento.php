<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $fillable = ['codigo','nombre','concentracion','cantidad','fecha_ingreso','fecha_reposicion','fk_tipo_medicamento'];

    protected $table = 'farmacia';

}
