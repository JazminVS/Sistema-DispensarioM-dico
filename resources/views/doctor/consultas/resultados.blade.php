@extends('layouts.dashboard')

@section('container')
    <div class="border-bottom border-dilipa">
        <h3 class="text-center text-dilipa">CONSULTA MEDICA</h3>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>Lista de Pacientes</a></li>
            <li class="breadcrumb-item"><a>Consulta Médica</a></li>
            <li class="breadcrumb-item"><a href="{{ url()->previous()}}">Diagnóstico</a></li>
            <li class="breadcrumb-item active" aria-current="page">Resultados de Consulta</li>
        </ol>
    </nav>
    <h5 class="text-primary text-center">Resultados</h5><br>

    @endsection