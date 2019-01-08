<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Procedimientos extends Model
{
    //
    protected $fillable = ['fecha','diagnostico','pk_paciente','pk_tipo_sano','pk_morbilidad','pk_vigilancia','pk_atendido_por'];

    protected $table = 'procedimiento_medico';
    public function scopeName ($query, $name){
        //dd("scope:",$name);
        if(trim($name) != "" ){
            $query->orWhere(DB::raw("CONCAT(`nombres`, ' ', `apellido1`,' ',  `apellido2`)"), 'LIKE', "%".$name."%");
        }
    }
}
