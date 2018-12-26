<?php

namespace App\Http\Controllers\Doctor;

use App\Paciente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProcedimientoController extends Controller
{
    public function pacientes(Request $request)
    {
        $pacientes = Paciente::name($request->get('nombre'))
            ->orderBy('apellido1')
            ->paginate('5');
        return view('doctor.procedimientos.pacientes', compact('pacientes'));
    }

}
