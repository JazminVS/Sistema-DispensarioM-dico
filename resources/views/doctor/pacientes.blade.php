@extends('layouts.dashboard')

@section('content')
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
                            <a class="btn btn-dilipa btn-xs" href="{!!action('Paciente\PacienteController@show',$paciente->id)!!}">Aceptar</a>
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