@extends('layouts.dashboard')

@section('content')
    <div class="border-bottom border-dark">
        <h3 class="text-center text-dilipa">PROCEDIMIENTOS</h3>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Lista de Procedimientos</li>
        </ol>
    </nav>
    <div>
        <a class="btn btn-diliceleste col-md-2 btn-md offset-md-10" href="{{URL::to('doctor/pacientpro')}}">Crear Procedimiento</a>
    </div>
    <div>
        <a class="btn btn-success offset-md-5" href="{{ URL::to('doctor/descargarprocedimiento') }}" role="button">
            <span class="fas fa-file-excel"></span>
        </a>
        <a class="btn btn-danger" href="{{ URL::to('doctor/descargarprocedimiento') }}" role="button">
            <span class="fas fa-file-pdf"></span>
        </a>
    </div>
    <div>
        <h5 class="text-primary">Lista de Procedimientos Realizados</h5>
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