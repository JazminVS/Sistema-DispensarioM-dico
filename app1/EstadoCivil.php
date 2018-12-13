<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoCivil extends Model
{
    //
    protected $fillable = [
        'descripcion'
    ];

    protected $table = 'tipo_estado_civil';
}
