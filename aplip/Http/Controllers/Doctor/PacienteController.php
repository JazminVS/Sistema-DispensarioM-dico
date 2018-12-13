<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use App\Paciente;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PacienteController extends Controller
{
    public function index(Request $request)
    {
        //dd($request->get('name'));
        $pacientes=Paciente::all();
        return view ('doctor.paciente',compact('pacientes'));
    }

    public function show($id)
    {
        $paciente=Paciente::whereId($id)->firstOrFail();
        return view('doctor.consulta',compact('paciente'));
    }

    public function edit($id_paciente)
    {
        $paciente = Paciente::find($id_paciente);
        return view('doctor.consulta',compact('paciente'));
    }







}
