@extends('layouts.dashboard')

@section('content')
    <div class="border-bottom border-dilipa">
        <h3 class="text-center text-dilipa">CONSULTA MEDICA</h3>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>Lista de Consultas Médicas</a></li>
        </ol>
    </nav>
    <div class="row form-inline container">
        <div class="col-md-4 form-inline">
            <h5 class="text-primary col-md-8">Lista de Consultas</h5>
            <a class="btn btn-sm col-md-4" href="consultapaciente" role="button" style="font-size: 1em; color: #0071bd;">
                <i class="fas fa-plus-circle"></i>
                Agregar
            </a>
        </div>
    </div>
    <div>
        <a class="btn btn-success offset-md-5" href="{{ URL::to('doctor/descargarconsultas') }}" role="button">
            <span class="fas fa-file-excel"></span>
        </a>
    </div>
    @if($consultas->isEmpty())
        <p>NO EXISTEN REGISTROS !!</p>
    @else
        <table class="table table-responsive-md text-center table-hover">
            <thead class="thead-diliceleste">
            <tr>
                <th>N°</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Paciente</th>
                <th>Motivo</th>
                <th>Tipo de diagnóstico</th>
                <th>Diagnóstico (CIE)</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($consultas as $consulta)
                @foreach($diagnosticos as $diagnostico)
                    @foreach($pacientes as $paciente)
                <tr>
                        @if($diagnostico->pk_id_consulta==$consulta->id && $consulta->pk_id_paciente ==$paciente->id )
                            <td>{!! $consulta->id !!}</td>
                            <td>{!! $consulta->fecha_consulta !!}</td>
                            <td>{!! $consulta->hora_consulta !!}</td>
                            <td>{!! $paciente->nombres.' '.$paciente->apellido1.' '.$paciente->apellido2!!}</td>
                            <td>{!! $consulta->motivo_consulta!!}</td>

                        <td>
                            <a class="badge badge-tomate" href="#">
                                <span style="font-size: 1.5em; color: #0071bd;">
                                  <i class="fas fa-edit"></i></span>
                            </a>
                            <a class="badge badge-tomate" href="#">
                                <span style="font-size: 1.5em; color: #f26202;">
                                  <i class="fas fa-trash-alt"></i></span>
                            </a>
                        </td>
                </tr>

                        @endif
                    @endforeach
                @endforeach
            @endforeach
            </tbody>
        </table>
    @endif
@endsection