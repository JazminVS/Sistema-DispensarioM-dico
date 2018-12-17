<?php

namespace App\Http\Controllers\asistente;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportesController extends Controller
{
    public function index (){
        return view('asistente.reportes.reportes');
    }
}
