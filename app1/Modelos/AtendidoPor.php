<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class AtendidoPor extends Model
{
    protected $fillable = ['descripcion'];

    protected $table = 'atendido_por';
}
