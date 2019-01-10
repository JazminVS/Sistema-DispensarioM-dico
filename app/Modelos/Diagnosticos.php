<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Diagnosticos extends Model
{
    //
    protected $fillable = ['indicaciones','pk_id_consulta','pk_tipo_diagnostico','pk_cie'];

    protected $table = 'diagnostico';
}
