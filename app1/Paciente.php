<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['nombres','apellidos','CI','fecha_nacimiento','lugar_nacimiento',
                            'edad','profesion','ocupacion','direccion','telf1','telf2',
                            'contacto','telf3','telf4','discapacidad','carnet'];

    protected $table = 'pacientes';

    public function scopeName ($query, $name, $cedula){
        $query->where('nombres',$name);
        $query->where('CI',$cedula);
    }
}
