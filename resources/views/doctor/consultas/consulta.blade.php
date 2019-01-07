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
    @include('flash::message')



<div class="container offset-md-1">


    <form class="form-horizontal" method="POST" action="{{ route('registro') }}">
        {{ csrf_field() }}
    <div class="form-group row">
        <h5 class="col-md-3">Paciente</h5>
        <input value="{{$paciente->id}}" name="paciente" style="display:none">
        <div class="col-md-7">
         <input value="{{$paciente->nombres." ".$paciente->apellido1." ".$paciente->apellido2}}" class="form-control" >
        </div>
    </div>

    <div class="form-group row ">
        <h5 class="col-sm-3">Motivo de Consulta</h5>
        <div class="col-sm-7">
            <textarea type="submit" class="form-control" type="text" rows="4" name="motivo" required></textarea>
        </div>
    </div>

    <div class="form-group row ">
        <h5 class="col-sm-3">Exámen Físico</h5>
        <div class="col-sm-7">
            <textarea type="submit" class="form-control" type="text" rows="4" name="examen"></textarea>
        </div>
    </div>

    <div class="form-group row ">
        <h5 class="col-md-3">Observaciones del doctor</h5>
        <div class="col-md-7">
            <textarea type="submit" class="form-control" type="text" rows="4" name="observaciones" required></textarea>
        </div>
    </div>
    <div class="form-group row ">
        {!! link_to(URL::previous(), 'Atrás', ['class' => 'btn btn-diliazul btn-md col-md-2 offset-md-5']) !!}
        <button type="submit" class="btn btn-primary col-md-2 offset-md-1">Siguiente</button>
    </div>
    </form>
</div>
    <br/>
@endsection
