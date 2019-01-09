<?php

namespace App\Http\Controllers\Doctor;

use App\Modelos\Citas;
use App\Paciente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CitaController extends Controller
{
    //
    public function index()
    {
        $citas=Citas::all();
        return view('doctor.citas.cita',compact('citas'));
    }
}
