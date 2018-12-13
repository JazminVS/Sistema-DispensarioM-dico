<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function consulta()
    {
        return view('doctor/consulta');
    }

    public function diagnostico()
    {
        return view('doctor/diagnostico');
    }
    public function cita()
    {
        return view('doctor/cita');
    }
}
