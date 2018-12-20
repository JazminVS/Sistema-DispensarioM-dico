<?php

namespace App\Http\Controllers\asistente;

use App\EstadoCivil;
use App\Modelos\Genero;
use App\Modelos\NivelInstruccion;
use App\Modelos\Sucursal;
use App\Modelos\TipoDiscapacidad;
use App\Paciente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PacienteController extends Controller
{
    public function paciente(Request $request)
    {
        //dd($request->get('nombre'));
        //dd($request->get('cedula'));
        $pacientes = Paciente::name($request->get('nombre'))
            ->orderBy('apellido1')
            ->paginate('5');
        return view('asistente.pacientes.paciente', compact('pacientes'));
    }

    public function pacientes(Request $request)
    {
        //dd($request->get('nombre'));
        //dd($request->get('cedula'));
        $pacientes = Paciente::all();
        return view('asistente.pacientes.paciente', compact('pacientes'));
    }

    public function verpacientes()
    {
        $estado_civil=EstadoCivil::all();
        $generos=Genero::all();
        $tipo_instruccion=NivelInstruccion::all();
        $tipo_discapacidad=TipoDiscapacidad::all();
        $sucursales=Sucursal::all();
        return view ('asistente.pacientes.crear_paciente',compact('estado_civil','generos','tipo_instruccion','tipo_discapacidad','sucursales'));
    }
    public function listapacientes(Request $request)
    {
        $sucursales= Sucursal::all();
        $estado_civil=EstadoCivil::all();
        $pacientes = Paciente::name($request->get('nombre'))
            ->orderBy('apellido1')
            ->paginate('5');
        return view ('asistente.pacientes.pacientes',compact('pacientes','sucursales','estado_civil'));
    }
    protected function editarpacientes($id_paciente)
    {
        $paciente = Paciente::find($id_paciente);
        $estado_civil=EstadoCivil::all();
        $generos=Genero::all();
        $tipo_instruccion=NivelInstruccion::all();
        $tipo_discapacidad=TipoDiscapacidad::all();
        $sucursales=Sucursal::all();
        return view('asistente.pacientes.editar_paciente', compact('paciente',
            'estado_civil','generos','tipo_instruccion','tipo_discapacidad','sucursales'));
    }
    protected function actualizarpaciente(Request $request,$id_paciente)
    {
        //Paciente::find($id_paciente)->update($request->all());
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
        $apellido1 = $request->input('apellido1');
        $apellido2 = $request->input('apellido2');
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

        $date = date_create($fecha_nacimiento);
        $nacimiento = date_format($date, 'Y-m-d'); //fecha de nacimiento para ingresar a base
        $edad=edad($nacimiento);


        DB::table('pacientes')->where('id',$id_paciente)->update(array(
            'nombres'=>$nombres,
            'apellido1'=>$apellido1,
            'apellido2'=>$apellido2,
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
        ));
        echo "datos actualizados correctamente";
    }

    protected function crearpaciente(Request $request)
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
        $apellido1 = $request->input('apellido1');
        $apellido2 = $request->input('apellido2');
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
                'apellido1'=>$apellido1,
                'apellido2'=>$apellido2,
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
