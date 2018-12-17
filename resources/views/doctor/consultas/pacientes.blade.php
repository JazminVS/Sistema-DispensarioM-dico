@extends('layouts.dashboard')

@section('content')
    <div class="border-bottom border-info">
        <h2 class="text-center text-info">CONSULTA MÉDICA</h2>
    </div>
    <h5>Búsqueda de pacientes</h5>
    {{Form::open(['route'=>'consultapaciente','method'=>'GET','class'=>'row offset-md-2 form-group'])}}
    <div class="col-md-4">
        {{Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Por apellidos o nombres'])}}
    </div>
    <div class="col-md-4">
        {{Form::text('cedula',null,['class'=>'form-control','placeholder'=>'Por cedula de identidad'])}}
    </div>
    <div class="col-md-4">
        <button href="#" class="btn btn-dark w-100" role="button" aria-pressed="true">
            <span data-feather="search"></span>
            Buscar
        </button>
    </div>
    {{Form::close()}}


    <!-- /.box --><!-- Tabla Lista de Usuarios -->
    <div class="box box-danger">
        <div class="box-header with-border">
            <h5 class="box-title">Lista de Pacientes</h5>
        </div>
        <div class="box-body">
            @if($pacientes->isEmpty())
                <p>No existen registros</p>
            @else
                <table class="table table-sm table-info">
                    <thead class="thead-dark">
                    <tr>
                        <th>Apellidos</th>
                        <th>Nombres</th>
                        <th>Cedula</th>
                        <th>Fecha de nacimiento</th>
                        <th>Lugar de nacimiento</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pacientes as $paciente)
                        <tr>
                            <td>{!! $paciente->apellido1." ".$paciente->apellido2 !!}</td>
                            <td>{!! $paciente->nombres !!}</td>
                            <td>{!! $paciente->CI !!}</td>
                            <td>{!! $paciente->fecha_nacimiento!!}</td>
                            <td>{!! $paciente->lugar_nacimiento!!}</td>
                            <td>
                                <a class="btn btn-info btn-xs" href="{!!action('Doctor\PacienteController@show',$paciente->id)!!}">Generar consulta</a>
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

    <!-- /.box -->
@endsection