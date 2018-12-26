<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Medicamento extends Model
{
    protected $fillable = ['codigo','nombre','concentracion','cantidad','fecha_ingreso','fecha_reposicion','fk_tipo_medicamento'];

    protected $table = 'farmacia';

    public function scopeName ($query, $name){
        //dd("scope:",$name);
        if(trim($name) != "" ){
            $query->orWhere(DB::raw("nombre"), 'LIKE', "%".$name."%");
        }
    }
}
