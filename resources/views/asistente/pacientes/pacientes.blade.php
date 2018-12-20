@extends('layouts.asistente')
@section('content')
    <div class="border-bottom border-dark">
        <h3 class="text-center titulo">PACIENTES</h3>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Lista de Pacientes</li>
        </ol>
    </nav>
    <div class="row form-inline container">
        <div class="col-md-4 form-inline">
            <h5 class="text-primary col-md-8">Lista de Pacientes</h5>
            <a class="btn btn-tomate btn-sm col-md-4" href="crearpaciente" role="button">
                <span data-feather="plus-circle"></span>
                Crear nuevo
            </a>
        </div>
        <div class="col-md-8 ">
            {{Form::open(['route'=>'asistentepacientes','method'=>'GET','class'=>'row form-group'])}}
            <div class="col-md-3 offset-md-2 col-form-label-sm">
                {{Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Por apellidos'])}}
            </div>
            <div class="col-md-3 offset-md-1 col-form-label-sm">
                {{Form::text('cedula',null,['class'=>'form-control ','placeholder'=>'Por cedula'])}}
            </div>
            <button href="#" class="btn btn-azul btn-sm col-md-2 offset-md-1" role="button" aria-pressed="true">
                <span data-feather="search"></span>
                Buscar
            </button>
            {{Form::close()}}
        </div>
    </div>
    @if($pacientes->isEmpty())
        <p>NO SE HAN CREADO AÚN PACIENTES EN EL SISTEMA</p>
    @else
        <table class="table table-responsive-md text-center table-bordered">
            <thead class="thead-celeste">
            <tr>
                <th>Apellidos</th>
                <th>Nombres</th>
                <th>Cedula</th>
                <th>Edad</th>
                <th>Fecha de nacimiento</th>
                <th>Sucursal</th>
                <th>Estado Civil</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($pacientes as $paciente)
                <tr>
                    <td>{!! $paciente->apellido1." ". $paciente->apellido2 !!}</td>
                    <td>{!! $paciente->nombres !!}</td>
                    <td>{!! $paciente->CI !!}</td>
                    <td>{!! $paciente->edad !!}</td>
                    <td>{!! $paciente->fecha_nacimiento!!}</td>

                    <?php
                    $id_tiposucursal=$paciente->pk_sucursal;

                    foreach ($sucursales as $sucursal=>$ids) {
                        $id=$ids->id;
                        if ($id==$id_tiposucursal){
                            $tiposucursal=$ids->descripcion;
                        }
                    }
                    //ESTADO CIVIL
                    $id_estado=$paciente->pk_estado_civil;

                    foreach ($estado_civil as $estadocivil=>$ids) {
                        $id=$ids->id;
                        if ($id==$id_estado){
                            $estadocivils=$ids->descripcion;
                        }
                    }

                    ?>
                    <td>{!! $tiposucursal !!}</td>
                    <td>{!! $estadocivils!!}</td>
                    <td>
                        <a class="badge badge-tomate" href="{{action('asistente\PacienteController@editarpacientes',$paciente->id)}}">Editar</a>
                        <a class="badge badge-azul" href="">Eliminar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection