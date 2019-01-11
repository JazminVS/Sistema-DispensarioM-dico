@extends('layouts.dashboard')

@section('content')
    <div class="border-bottom border-dilipa">
        <h3 class="text-center text-dilipa">CONSULTA MEDICA</h3>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a >Lista de Pacientes</a></li>
            <li class="breadcrumb-item"><a href="{{ url()->previous()}}">Consulta Médica</a></li>
            <li class="breadcrumb-item active" aria-current="page">Diagnóstico</li>
        </ol>
    </nav>

    <h5 class="text-primary text-center">DATOS DE DIAGNÓSTICO MÉDICO</h5><br>

    <div class="container offset-1 col-md-10">
        @include('flash::message')

        <form class="form-horizontal" method="POST" action="{{ route('insertardiagnostico') }}">
            {{ csrf_field() }}
            <input value="{{$id_consulta}}" name="consulta" style="display:none">
            <input value="{{$paciente}}" name="paciente" style="display:none;">
            <input value="{{$observaciones}}" name="observaciones" style="display:none;">
            <div class="row">
                <div class="col-md-4 form-group">
                    <label for="tipo_diagnostico" class="col-form-label">TIPO DE DIAGNÓSTICO</label>
                    <select class="form-control " name="diagnostico" id="tipo_diagnostico">
                        @foreach($diagnosticos as $diagnostico)
                            <option value="{{$diagnostico->id}}">{{$diagnostico->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="offset-md-2 col-md-6 form-group">
                    <label for="select" class="col-form-label">ENFERMEDAD</label>
                    <select class="form-control col-md-8" id="select" placeholder="Escoga una opción" name="enfermedad" data-allow-clear="1">
                        @foreach($enfermedades as $enfermedad)
                            <option value="{{$enfermedad->id}}">{{$enfermedad->descripcion." ".$enfermedad->campo}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class=" form-group">
                <label for="select" class="col-form-label">PRESCRIPCION DE MEDICAMENTO</label>
                <textarea type="text" class="form-control col-md-10" id="prescripcion" name="prescripcion" rows="1" required></textarea>
            </div>

            <div class=" form-group">
                <label for="select" class="col-form-label">INDICACIONES</label>
                <textarea type="text" class="form-control col-md-10" id="indicaciones" name="indicaciones" rows="2" required></textarea>
            </div>

            <div class="form-group row ">
                {!! link_to(URL::previous(), 'Atrás', ['class' => 'btn btn-diliazul btn-md col-md-2 offset-md-6']) !!}
                <button type="submit" class="btn btn-primary col-md-2 offset-md-1">Siguiente</button>
            </div>
    </form>
    </div>
@endsection
