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
    public function index()
    {
        $pacientes = Paciente::all();
        return view('doctor.pacientes', compact('pacientes'));
    }

    public function ver($id)
    {
        $paciente = Paciente::whereId($id)->firstOrFail();
        return view('pacientes.paciente', compact('paciente'));
    }

    public function paciente()
    {
        $pacientes = Paciente::all();
        return view('asistente.paciente', compact('pacientes'));
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

    protected function crear(Request $request)
    {
        function edad($fecha_nacimiento)
        {
            $dia = date("d");
            $mes = date("m");
            $ano = date("Y");

            $dianaz = date("d", strtotime($fecha_nacimiento));
            $mesnaz = date("m", strtotime($fecha_nacimiento));
            $anonaz = date("Y", strtotime($fecha_nacimiento));

            //si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual

            if (($mesnaz == $mes) && ($dianaz > $dia)) {
                $ano = ($ano - 1);
            }
            //si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual
            if ($mesnaz > $mes) {
                $ano = ($ano - 1);
            }
            //ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad
            $edad = ($ano - $anonaz);
            return $edad;
        }

        $nombres = $request->input('nombres');
        $apellidos = $request->input('apellidos');
        $cedula = $request->input('cedula');
        $fecha_nacimiento = $request->input('fecha_nacimiento');
        $lugar = $request->input('lugar');
        $profesion = $request->input('profesion');
        $ocupacion = $request->input('ocupacion');
        $direccion = $request->input('direccion');
        $telf1 = $request->input('telf1');
        $telf2 = $request->input('telf1');
        $contacto = $request->input('contacto');
        $telf3 = $request->input('telf3');
        $telf4 = $request->input('telf4');
        $carnet = $request->input('carnet');
        $porcentaje = $request->input('porcentaje');

        $estado_civil= $request->get('estado_civil');
        $genero= $request->get('genero');
        $nivel= $request->get('instruccion');
        $discapacidad = Input::get('discapacidad') == 'true' ? 1 : 0;
        $tipo_discapacidad = $request->get('tipo_discapacidad');
        $sucursal = $request->get('sucursal');
        $area = $request->input('area');
        $puesto = $request->input('puesto');
        /*echo $nombres,$apellidos,$cedula,$fecha_nacimiento, $lugar,$edad,$profesion,$ocupacion,
        $direccion,$telf1,$telf2,$telf3,$telf4,$contacto,$carnet,"<br>","discapacidad: ",$discapacidad,
        "estado civil: ", $estado_civil,"genero",$genero,"nivel_instruccion",$nivel,"tipo discapacidad",$tipo_discapacidad,$porcentaje;*/
        //echo $fecha_nacimiento;
        $date = date_create($fecha_nacimiento);
        $nacimiento = date_format($date, 'Y-m-d'); //fecha de nacimiento para ingresar a base
        $edad=edad($nacimiento);

        DB::table('pacientes')->insert(
            [
                'nombres'=>$nombres,
                'apellidos'=>$apellidos,
                'CI' => $cedula,
                'fecha_nacimiento'=> $nacimiento,
                'lugar_nacimiento'=> $lugar,
                'edad'=> $edad,
                'profesion'=> $profesion,
                'ocupacion'=> $ocupacion,
                'direccion'=> $direccion,
                'telf1'=> $telf1,
                'telf2'=> $telf2,
                'contacto'=> $contacto,
                'telf3'=> $telf3,
                'telf4'=> $telf4,
                'discapacidad'=> $discapacidad,
                'carnet'=> $carnet,
                'porcentaje'=>$porcentaje,
                'pk_estado_civil'=> $estado_civil,
                'pk_genero'=> $genero,
                'pk_nivel_instruccion'=> $nivel,
                'pk_discapacidad'=> $tipo_discapacidad,
                'pk_sucursal'=> $sucursal,
                'area'=> $area,
                'puesto'=> $puesto,
            ]);
        echo "datos ingresados correctamente";

    }
}

