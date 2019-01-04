<?php

namespace App\Http\Controllers\Doctor;

use App\Consulta;
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
    public function insertar(Request $request) {
        $motivo = $request -> input('motivo');
        $examen = $request -> input('examen');
        $observaciones = $request -> input('observaciones');
        $id_paciente=$request->get('paciente');
        //$todos = $request->all();
        //ECHO $motivo,$examen,$observaciones," id: ",$id;
        $id_consulta=DB::table('consulta')->insertGetId(
            [
                'motivo_consulta'=> $motivo,
                'observaciones'=> $observaciones,
                'pk_id_examen'=> null,
                'pk_id_paciente'=> $id_paciente,
            ]);
        $diagnosticos=TipoDiagnostico::all();

        $enfermedades=cie::all();

        return view('doctor.consultas.diagnostico', compact('id_consulta','diagnosticos', 'enfermedades','resultado'));

    }

    public function diagnostico(Request $request) {
        //$motivo = $request -> input('prescripcion');
        $indicaciones = $request -> input('indicaciones');
        $consulta = $request -> input('consulta');
        $diagnostico = $request->get('diagnostico');
        $enfermedad = $request->get('enfermedad');
        //echo "tipo_diagnostico:",$diagnostico;
        DB::table('diagnostico')->insert(
            [
                'indicaciones'=> $indicaciones,
                'pk_id_consulta'=> $consulta,
                'pk_tipo_diagnostico'=> $diagnostico,
                'pk_cie'=>$enfermedad,
            ]);
        flash('Transacción exitosa!!')->error();
        return view('doctor.consultas.resultados');

    }


}
