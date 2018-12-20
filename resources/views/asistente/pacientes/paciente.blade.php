@extends('layouts.asistente')


@section('content')
    <div class="border-bottom border-dark">
        <h3 class="text-center titulo">PROCEDIMIENTOS</h3>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Selección de Pacientes</li>
        </ol>
    </nav>
        {{Form::open(['route'=>'asistentepaciente','method'=>'GET','class'=>'row form-group'])}}
    <h5 class="subtitulo col-md-3"></h5>
        <div class="col-md-3 offset-md-1">
            {{Form::text('nombre',null,['class'=>'form-control col-form-label-sm','placeholder'=>'Por apellidos'])}}
        </div>
        <div class="col-md-3">
            {{Form::text('cedula',null,['class'=>'form-control col-form-label-sm','placeholder'=>'Por número de cedula'])}}
        </div>
        <div class="col-md-2">
            <button href="#" class="btn btn-limon btn-sm w-100" role="button" aria-pressed="true">
                <span data-feather="search"></span>
                Buscar
            </button>
        </div>
        {{Form::close()}}

    @if($pacientes->isEmpty())
            <p>No existen registros</p>
    @else
         <table class="table table-responsive-md text-center">
              <thead class="thead-tomate">
              <tr>
                 <th>Apellidos</th>
                  <th>Nombres</th>
                  <th>Cedula</th>
                  <th>Fecha de nacimiento</th>
                  <th>Lugar de nacimiento</th>
                  <th>Edad</th>
                  <th></th>
              </tr>
              </thead>
             <tbody>
             @foreach($pacientes as $paciente)
                 <tr>
                     <td>{!! $paciente->apellido1." ". $paciente->apellido2 !!}</td>
                     <td>{!! $paciente->nombres !!}</td>
                     <td>{!! $paciente->CI !!}</td>
                     <td>{!! $paciente->fecha_nacimiento!!}</td>
                     <td>{!! $paciente->lugar_nacimiento!!}</td>
                     <td>{!! $paciente->edad!!}</td>
                     <td>
                         <a class="badge badge-celeste" href="{!!action('Paciente\PacienteController@verpaciente',$paciente->id)!!}">Seleccionar</a>
                     </td>

                 </tr>
             @endforeach
             </tbody>
         </table>
    @endif
@endsection