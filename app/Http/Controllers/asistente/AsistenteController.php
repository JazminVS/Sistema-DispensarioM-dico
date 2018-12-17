<?php

namespace App\Http\Controllers\asistente;


use App\Modelos\AtendidoPor;
use App\Modelos\Genero;
use App\Modelos\Morbilidad;
use App\Modelos\Sucursal;
use App\Modelos\TipoSano;
use App\EstadoCivil;
use App\Modelos\NivelInstruccion;
use App\Modelos\TipoDiscapacidad;
use App\Modelos\VigilanciaSalud;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AsistenteController extends Controller
{
    public function index()
    {
        return view ('asistente.asistente');
    }

    //VISTA REPORTES
    public function reportes()
    {
        return view ('asistente.reportes.reportes');
    }



    public function ingresoprocedimiento(Request $request)
    {
        $fecha = $request->input('fecha');
        $edad = $request->input('edad');
        $atendido = $request->get('atencion');
        $paciente = $request->input('paciente');
        $diagnostico = $request->input('diagnostico');
        $sano = $request->get('sano');
        $morbilidad = $request->get('morbilidad');
        $vigilancia = $request->get('vigilancia');

        $date = date_create($fecha);
        $fecha_actual = date_format($date, 'Y-m-d'); //fecha actual para ingresar a base

        DB::table('procedimiento_medico')->insert(
            [
                'fecha'=>$fecha_actual,
                'diagnostico'=>$diagnostico,
                'pk_paciente'=>$paciente,
                'pk_tipo_sano'=>$sano,
                'pk_morbilidad'=>$morbilidad,
                'pk_vigilancia'=>$vigilancia,
                'pk_atendido_por'=>$atendido,
            ]
        );
        echo "datos ingresados correctamente";
    }



}
