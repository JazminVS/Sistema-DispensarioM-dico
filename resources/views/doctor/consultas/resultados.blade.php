@extends('layouts.dashboard')

@section('content')
    <div class="border-bottom border-dilipa">
        <h3 class="text-center text-dilipa">CONSULTA MEDICA</h3>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>Lista de Pacientes</a></li>
            <li class="breadcrumb-item"><a>Consulta Médica</a></li>
            <li class="breadcrumb-item"><a href="{{ url()->previous()}}">Diagnóstico</a></li>
            <li class="breadcrumb-item active" aria-current="page">Resultados de Consulta</li>
        </ol>
    </nav>
    <h5 class="text-primary text-center">RESULTADOS DE CONSULTA</h5><br>
    @include('flash::message')
    <div class="row col-md-10">
        <div class="col-md-2">
            <label for="select" class="col-form-label">CONSULTA N.</label>
            <input value="{{$consulta}}" name="consulta" class="form-control col-md-7">
        </div>
        <div class="col-md-4">
            <label for="select" class="col-form-label">PACIENTE</label>
            <input value="{{$paciente}}" name="paciente" class="form-control ">
        </div>
        <?php
        //TIPO DE DIAGNOSTICO
        $diagnostico; //id_tipo_diagnostico
        foreach ($diagnosticos as $diagnosticos=>$ids) {
            $id=$ids->id;
            if ($id==$diagnostico){
                $tipodiagnostico=$ids->descripcion;
            }}
        ?>

        <div class="col-md-4">
            <label for="select" class="col-form-label">TIPO DE DIAGNOSTICO</label>
            <input value="{{ $tipodiagnostico}}" name="paciente" class="form-control ">
        </div>
        <div class="col-md-4">
            <label for="select" class="col-form-label">OBSERVACIONES</label>
            <input value="{{$observaciones}}" name="paciente" class="form-control ">
        </div>

        <br>
    </div>
        <div class="form-group">
            <form method="post">
                <br>
            {!! link_to(URL::previous(), 'Salir', ['class' => 'btn btn-diliazul btn-md col-md-2 offset-md-6']) !!}

            </form>
        </div>
@endsection