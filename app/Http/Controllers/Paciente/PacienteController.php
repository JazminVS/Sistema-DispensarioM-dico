<?php

namespace App\Http\Controllers\Paciente;

use App\Modelos\AtendidoPor;
use App\Modelos\Morbilidad;
use App\Modelos\Sucursal;
use App\Modelos\TipoSano;
use App\Modelos\VigilanciaSalud;
use App\Paciente;
use Faker\Provider\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; /*QUERY BUILDER*/
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class PacienteController extends Controller
{


    public function ver($id)
    {
        $paciente = Paciente::whereId($id)->firstOrFail();
        return view('pacientes.paciente', compact('paciente'));
    }



    public function verpaciente($id)
    {
        $paciente = Paciente::whereId($id)->firstOrFail();
        $atencion=AtendidoPor::all();
        $sanos=TipoSano::all();
        $vigilancia=VigilanciaSalud::all();
        $morbilidad=Morbilidad::all();
        $sucursales=Sucursal::all();
        return view('asistente.procedimientos',compact('atencion','sanos','vigilancia','morbilidad','paciente','sucursales'));
    }

    /**
     * @param Request $request
     */


}

