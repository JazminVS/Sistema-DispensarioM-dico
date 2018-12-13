<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    protected $fillable = ['motivo_consulta','observaciones'];

    protected $table = 'consulta';
}
