@extends('layouts.dashboard')

@section('content')
    <div class="border-bottom border-dilipa">
        <h3 class="text-center text-dilipa">CONSULTA MEDICA</h3>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url()->previous()}}">Lista de Pacientes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Consulta Médica</li>
        </ol>
    </nav>
    <?PHP
    $id=$paciente->id;
    //echo $id_paciente;
    ?>
    <h5 class="text-primary text-center">Datos de consulta médica</h5><br>
<div class="container offset-md-1">

    <form class="form-horizontal" method="POST" action="{{ route('registro') }}">
        {{ csrf_field() }}
    <div class="form-group row">
        <h5 class="col-md-3">Paciente</h5>
        <input value="{{$paciente->id}}" name="paciente" style="display:none">
        <div class="col-md-7">
         <input value="{{$paciente->nombres." ".$paciente->apellidos}}" class="form-control" >
        </div>
    </div>

    <div class="form-group row ">
        <h5 class="col-sm-3">Motivo de Consulta</h5>
        <div class="col-sm-7">
            <textarea type="submit" class="form-control" type="text" rows="4" name="motivo"></textarea>
        </div>
    </div>

    <div class="form-group row ">
        <h5 class="col-sm-3">Exámen Físico</h5>
        <div class="col-sm-7">
            <textarea type="submit" class="form-control" type="text" rows="4" name="examen"></textarea>
        </div>
    </div>

    <div class="form-group row ">
        <h5 class="col-sm-3">Observaciones del doctor</h5>
        <div class="col-sm-7">
            <textarea type="submit" class="form-control" type="text" rows="4" name="observaciones"></textarea>
        </div>
    </div>

    <button type="submit" class="btn btn-primary offset-md-9">Siguiente</button>
    </form>
</div>
    <br/>
@endsection
