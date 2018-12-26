@extends('layouts.dashboard')

@section('content')
    <div class="border-bottom border-dilipa">
        <h3 class="text-center text-dilipa">PACIENTES</h3>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Lista de Pacientes</li>
        </ol>
    </nav>
    <div class="form-inline">
    <h5 class="text-primary">Lista de Pacientes</h5>
    <a class="btn btn-sm text-dark"  href="creapaciente" role="button">
        <span data-feather="plus-circle"></span>
        Crear nuevo
    </a>
        {{Form::open(['route'=>'pacientes','method'=>'GET','class'=>'row offset-md-4'])}}

        {{Form::text('nombre',null,['class'=>'form-control form-control-sm col-md-5','placeholder'=>'Por apellidos o nombres'])}}
        {{Form::text('cedula',null,['class'=>'form-control form-control-sm col-md-4','placeholder'=>'Por cedula'])}}

        <button class="btn btn-sm col-md-3 btn-outline-primary" role="button" aria-pressed="true">
            <span data-feather="search"></span>
            Buscar
        </button>
        {{Form::close()}}
    </div><br>


    <div>
    @if($pacientes->isEmpty())
        <p>No existen registros</p>
    @else
        <table class="table table-bordered table-responsive-md text-sm">
            <thead>
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
                        <a class="btn btn-success btn-sm" href="{!!action('Doctor\PacienteController@editarpaciente',$paciente->id)!!}">Editar</a>
                        <a class="btn btn-info btn-sm">Eliminar</a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        @endif
    </div>
@endsection