<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Consultas extends Model
{
    //
    protected $fillable = ['motivo_consulta','observaciones','pk_id_examen','pk_id_paciente'];

    protected $table = 'consulta';
}
