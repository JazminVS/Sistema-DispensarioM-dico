<?php

namespace App\Http\Controllers\Doctor;

use App\Consulta;
use App\EstadoCivil;
use App\Modelos\Diagnosticos;
use App\Paciente;
use App\cie;
use App\TipoDiagnostico;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB; /*QUERY BUILDER*/

class ConsultaController extends Controller
{
    /**
     * @param Request $request
     * @param $id
     */
    public function index() {
        $consultas=Consulta::all();
        $diagnosticos=Diagnosticos::all();
        $pacientes=Paciente::all();
        $tipo_diagnostico=TipoDiagnostico::all();
        $cie=cie::all();
        return view('doctor.consultas.consultas',compact('consultas','diagnosticos','pacientes','estado_civil','tipo_diagnostico',
            'cie'
        ));
    }
    public function insertar(Request $request) {
        $motivo = $request -> input('motivo');
        $fecha_consulta = $request -> input('fecha');
        $hora_consulta = $request -> input('hora');
        $examen = $request -> input('examen');
        $observaciones = $request -> input('observaciones');
        $id_paciente=$request->get('idpaciente');
        $paciente=$request->get('paciente');

        //$todos = $request->all();
        //ECHO $motivo,$examen,$observaciones," id: ",$id;
        $id_consulta=DB::table('consulta')->insertGetId(
            [
                'motivo_consulta'=> $motivo,
                'fecha_consulta'=> $fecha_consulta,
                'hora_consulta'=> $hora_consulta,
                'observaciones'=> $observaciones,
                'pk_id_examen'=> null,
                'pk_id_paciente'=> $id_paciente,
            ]);
        $diagnosticos=TipoDiagnostico::all();
        $enfermedades=cie::all();
        flash('Los datos de la consulta han sido ingresados correctamente. Por favor llene los siguientes campos para seguir con el proceso!!');
        return view('doctor.consultas.diagnostico', compact('id_consulta','diagnosticos', 'enfermedades','paciente','observaciones'));

    }

    public function diagnostico(Request $request) {
        //$motivo = $request -> input('prescripcion');
        $indicaciones = $request -> input('indicaciones');
        $consulta = $request -> input('consulta');
        $diagnostico = $request->get('diagnostico');
        $enfermedad = $request->get('enfermedad');
        $paciente=$request->get('paciente');
        $observaciones = $request -> input('observaciones');
        //echo "tipo_diagnostico:",$diagnostico;
        DB::table('diagnostico')->insert(
            [
                'indicaciones'=> $indicaciones,
                'pk_id_consulta'=> $consulta,
                'pk_tipo_diagnostico'=> $diagnostico,
                'pk_cie'=>$enfermedad,
            ]);
        $diagnosticos=TipoDiagnostico::all();

        flash('Transacción exitosa!!');
        return view('doctor.consultas.resultados',compact('consulta','diagnostico','diagnosticos','paciente','observaciones'));

    }


}
