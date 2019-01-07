@extends('layouts.dashboard')

@section('content')
    <div class="border-bottom border-dark">
        <h3 class="text-center text-dilipa">PROCEDIMIENTOS</h3>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Lista de Pacientes</li>
            <li class="breadcrumb-item"><a href="{{ url()->previous()}}">Datos del Procedimiento</a></li>
            <li class="breadcrumb-item active">Procedimientos Realizados</li>
        </ol>
    </nav>

    <h5 class="text-center text-dilipa">PROCEDIMIENTOS REALIZADOS</h5>
    @include('flash::message')

    <div>
        @if($procedimientos->isEmpty())
            <p>No existen registros</p>
        @else
            <table class="table table-sm">
                <thead class="thead-dark">
                <tr>
                    <th>Fecha de realización</th>
                    <th>Diagnóstico</th>
                    <th>Paciente</th>
                    <th>Atendido Por</th>
                </tr>
                </thead>
                <tbody>
                @foreach($procedimientos as $procedimiento)
                    <tr>
                        <td>{!! $procedimiento->fecha !!}</td>
                        <td>{!! $procedimiento->diagnostico !!}</td>
                        <td>{!! $procedimiento->pk_paciente !!}</td>
                        <td>{!! $procedimiento->pk_atendido_por!!}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>

@endsection