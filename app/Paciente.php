<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Paciente extends Model
{
    protected $fillable = ['nombres','apellidos','CI','fecha_nacimiento','lugar_nacimiento',
                            'edad','profesion','ocupacion','direccion','telf1','telf2',
                            'contacto','telf3','telf4','discapacidad','carnet'];

    protected $table = 'pacientes';

    public function scopeName ($query, $name){
        //dd("scope:",$name);
        if(trim($name) != "" ){
            $query->orWhere(DB::raw("CONCAT(`nombres`, ' ', `apellido1`,' ',  `apellido2`)"), 'LIKE', "%".$name."%");
        }
    }

}
