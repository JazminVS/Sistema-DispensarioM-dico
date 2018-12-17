@extends('layouts.dashboard')

@section('content')
    <div class="border-bottom border-info">
        <h2 class="text-center text-info">LISTA DE PACIENTES</h2>
    </div>
    <h5>Búsqueda de pacientes</h5>
    <div class="row  form-group">
        <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Por apellidos o nombre" aria-label="Search">
        </div>
        <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Por número de cédula" aria-label="Search">
        </div>
        <div class="col-md-4">
            <button href="#" class="btn btn-md btn-dark" role="button" aria-pressed="true">
                <span data-feather="search"></span>
                Buscar
            </button>
        </div>
    </div>
    <hr>


    @if($pacientes->isEmpty())
        <p>No existen registros</p>
    @else
        <table class="table table-bordered table-responsive-md">
            <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Cedula</th>
                <th>Fecha de nacimiento</th>
                <th>Lugar de nacimiento</th>
                <th></th>
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
                        <a class="btn btn-success btn-md" href="{!!action('Doctor\PacienteController@show',$paciente->id)!!}">Editar</a>
                        <a class="btn btn-info btn-md">Eliminar</a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
        @endif
@endsection