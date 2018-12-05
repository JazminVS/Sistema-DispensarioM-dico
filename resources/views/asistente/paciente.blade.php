@extends('layouts.asistente')


@section('content')
    <h4 class="text-secondary">Buscar Pacientes</h4>
    <div class="row offset-md-1 form-group">
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Por nombres y apellidos" aria-label="Search">
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Por número de cédula" aria-label="Search">
        </div>
        <div class="col-md-4">
            <button href="#" class="btn btn-success w-100" role="button" aria-pressed="true">
                <span data-feather="search"></span>
                Buscar
            </button>
        </div>
    </div>
    <hr>

    <!-- /.box --><!-- Tabla Lista de Usuarios -->
    <div class="box box-danger">
        <div class="box-header with-border">
            <h5 class="box-title">Lista de Pacientes</h5>
        </div>
        <div class="box-body">
            @if($pacientes->isEmpty())
                <p>No existen registros</p>
            @else
                <table class="table">
                    <thead>
                    <tr>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Cedula</th>
                        <th>Fecha de nacimiento</th>
                        <th>Lugar de nacimiento</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pacientes as $paciente)
                        <tr>
                            <td>{!! $paciente->nombres !!}</td>
                            <td>{!! $paciente->apellidos !!}</td>
                            <td>{!! $paciente->CI !!}</td>
                            <td>{!! $paciente->fecha_nacimiento!!}</td>
                            <td>{!! $paciente->lugar_nacimiento!!}</td>
                            <td>
                                <a class="btn btn-info btn-xs" href="{!!action('Paciente\PacienteController@verpaciente',$paciente->id)!!}">Aceptar</a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@endsection