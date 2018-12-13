@extends('layouts.asistente')


@section('content')
    <div class="border-bottom border-dark">
        <h3 class="text-center text-dark">PROCEDIMIENTOS</h3>
    </div><br>
    <h5 class="text-dark">Pacientes</h5>
    <div class="row offset-md-2 form-group">
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Por nombres y apellidos" aria-label="Search">
        </div>
        <div class="col-md-4">
            <input type="text" class="form-control" placeholder="Por número de cédula" aria-label="Search">
        </div>
        <div class="col-md-4">
            <button href="#" class="btn btn-dark w-100" role="button" aria-pressed="true">
                <span data-feather="search"></span>
                Buscar
            </button>
        </div>
    </div>
    <hr>
    @if($pacientes->isEmpty())
            <p>No existen registros</p>
    @else
         <table class="table table-striped">
              <thead class="thead-dark">
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
                         <a class="btn btn-dilipa1 btn-sm" href="{!!action('Paciente\PacienteController@verpaciente',$paciente->id)!!}">Generar Procedimiento</a>
                     </td>

                 </tr>
             @endforeach
             </tbody>
         </table>
    @endif
@endsection