@extends('layouts.dashboard')

@section('content')
    <div class="border-bottom border-dilipa">
        <h3 class="text-center text-dilipa">CONSULTA MEDICA</h3>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Lista de Pacientes</li>
        </ol>
    </nav>
    <div class="form-group">
    {{Form::open(['route'=>'consultapaciente','method'=>'GET','class'=>'form-inline'])}}
    <h5 class="text-primary col-md-4">Búsqueda de Pacientes</h5>
    {{Form::text('nombre',null,['class'=>'form-control form-control-sm col-md-3','placeholder'=>'Por apellidos o nombres'])}}
    {{Form::text('cedula',null,['class'=>'form-control form-control-sm col-md-3','placeholder'=>'Por cedula'])}}

    <button class="btn btn-sm col-md-1" role="button" aria-pressed="true">
        <span data-feather="search"></span>
        Buscar
    </button>
    {{Form::close()}}
    </div>


    <!-- /.box --><!-- Tabla Lista de Usuarios -->
    <div class="box box-danger">
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