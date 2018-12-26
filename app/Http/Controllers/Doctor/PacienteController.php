<?php

namespace App\Http\Controllers\Doctor;

use App\EstadoCivil;
use App\Modelos\Genero;
use App\Modelos\NivelInstruccion;
use App\Modelos\Sucursal;
use App\Modelos\TipoDiscapacidad;
use Illuminate\Http\Request;
use App\Paciente;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PacienteController extends Controller
{
    public function index(Request $request)
    {
        $pacientes = Paciente::name($request->get('nombre'))
            ->orderBy('apellido1')
            ->paginate('4');
        return view('doctor.consultas.pacientes', compact('pacientes'));
    }
    public function listapacientes(Request $request)
    {
        $pacientes = Paciente::name($request->get('nombre'))
            ->orderBy('apellido1')
            ->paginate('4');
        return view('doctor.pacientes.paciente', compact('pacientes'));
    }

    public function show($id)
    {
        $paciente=Paciente::whereId($id)->firstOrFail();
        return view('doctor.consultas.consulta',compact('paciente'));
    }

    public function edit($id_paciente)
    {
        $paciente = Paciente::find($id_paciente);
        //return view('doctor.consulta',compact('paciente'));
    }

    protected function editarpaciente($id_paciente)
    {
        $paciente = Paciente::find($id_paciente);
        $estado_civil=EstadoCivil::all();
        $generos=Genero::all();
        $tipo_instruccion=NivelInstruccion::all();
        $tipo_discapacidad=TipoDiscapacidad::all();
        $sucursales=Sucursal::all();
        return view('doctor.pacientes.editar_paciente', compact('paciente',
            'estado_civil','generos','tipo_instruccion','tipo_discapacidad','sucursales'));
    }

    public function verpacientes()
    {
        $estado_civil=EstadoCivil::all();
        $generos=Genero::all();
        $tipo_instruccion=NivelInstruccion::all();
        $tipo_discapacidad=TipoDiscapacidad::all();
        $sucursales=Sucursal::all();
        return view ('doctor.pacientes.crear_paciente',compact('estado_civil','generos','tipo_instruccion','tipo_discapacidad','sucursales'));
    }









}
