<?php

namespace App\Http\Controllers\Doctor;

use App\Modelos\Procedimientos;
use App\Paciente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ProcedimientoController extends Controller
{
    public function index(Request $request)
    {
        $procedimientos = Procedimientos::name($request->get('nombre'))
            ->orderBy('fecha','desc')
            ->paginate('15');
        return view('doctor.procedimientos.procedimientos', compact('procedimientos'));
    }
    public function pacientes(Request $request)
    {
        $pacientes = Paciente::name($request->get('nombre'))
            ->orderBy('apellido1')
            ->paginate('5');
        return view('doctor.procedimientos.pacientes', compact('pacientes'));
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
        $procedimientos = Procedimientos::orderBy('fecha', 'DESC')->get();

        flash('Los datos ingresados han sido almacenados correctamente!!');
        return view('doctor.procedimientos.resultados',compact('procedimientos'));
    }
    public function descargarexcel()
    {
        $procedimientos = Procedimientos::all();
        Excel::create("procedimientos", function ($excel) use ($procedimientos) {
            $excel->setTitle("Title");
            $excel->sheet("Sheet 1", function ($sheet) use ($procedimientos) {
                $sheet-> loadView('doctor.pacientes.paciente')->with();
            });
        })->download('xls');
        return back();
    }
}
