<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoDiagnostico extends Model
{
    protected $fillable = ['descripcion'];

    protected $table = 'tipo_diagnostico';
}
