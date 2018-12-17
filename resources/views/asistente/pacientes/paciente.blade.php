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
    <div class=" justify-content-end">
        <h5 class="subtitulo">Búsqueda de Pacientes</h5>
        {{Form::open(['route'=>'asistentepaciente','method'=>'GET','class'=>'row form-group'])}}
        <div class="col-md-3">
            {{Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Por apellidos y nombres'])}}
        </div>
        <div class="col-md-3">
            {{Form::text('cedula',null,['class'=>'form-control','placeholder'=>'Por cedula de identidad'])}}
        </div>
        <div class="col-md-2">
            <button href="#" class="btn btn-buscar w-100" role="button" aria-pressed="true">
                <span data-feather="search"></span>
                Buscar
            </button>
        </div>
        {{Form::close()}}
    </div>

    @if($pacientes->isEmpty())
            <p>No existen registros</p>
    @else
         <table class="table table-responsive-md">
              <thead class="thead-limon">
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
                     <td>{!! $paciente->apellido1." ". $paciente->apellido2 !!}</td>
                     <td>{!! $paciente->nombres !!}</td>
                     <td>{!! $paciente->CI !!}</td>
                     <td>{!! $paciente->fecha_nacimiento!!}</td>
                     <td>{!! $paciente->lugar_nacimiento!!}</td>
                     <td>
                         <a class="badge badge-limon" href="{!!action('Paciente\PacienteController@verpaciente',$paciente->id)!!}">Seleccionar</a>
                     </td>

                 </tr>
             @endforeach
             </tbody>
         </table>
    @endif
@endsection