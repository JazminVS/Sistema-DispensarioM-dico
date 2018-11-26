@extends('layouts.dashboard')

@section('content')
    <div class="border-bottom border-info">
        <h2 class="text-center text-info">CONSULTA MÉDICA</h2>
    </div>

<div class="container offset-md-1"><br/>
    <form class="form-horizontal" method="POST" action="{{ route('registro') }}">
        {{ csrf_field() }}
    <div class="form-group row">
        <h5 class="col-sm-3">Paciente</h5>
        <div class="col-sm-7">
            <?PHP
             $id_paciente=$paciente->id;
             //echo $id_paciente;
            ?>
            <input disabled type="text"  class="form-control" id="paciente" name="paciente" value="{!!$id_paciente!!}">
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

    <button type="submit" class="btn btn-primary offset-md-9">Guardar</button>
    </form>
</div>
    <br/>
@endsection
