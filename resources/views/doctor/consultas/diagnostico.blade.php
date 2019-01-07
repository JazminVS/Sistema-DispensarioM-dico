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
    @include('flash::message')
    <h5 class="text-primary text-center">Generar diagnóstico</h5><br>

    <div class="container offset-1">


        <form class="form-horizontal" method="POST" action="{{ route('insertardiagnostico') }}">
            {{ csrf_field() }}
            <input value="{{$id_consulta}}" name="consulta" style="display:none">
            <div class="form-group row">
                <h5 class="col-md-4">Tipo de diagnóstico</h5>
                <div class="col-md-4">
                     <select class="form-control" name="diagnostico" id="tipo_diagnostico">
                          @foreach($diagnosticos as $diagnostico)
                              <option value="{{$diagnostico->id}}">{{$diagnostico->descripcion}}</option>
                          @endforeach
                     </select>
                </div>
            </div>

            <div class="form-group row ">
                <h5 class="col-md-4">Enfermedad</h5>
                <div class="col-md-7">
                    <select class="form-control" id="select" placeholder="Choose one thing" name="enfermedad" data-allow-clear="1">
                        @foreach($enfermedades as $enfermedad)
                            <option value="{{$enfermedad->id}}">{{$enfermedad->descripcion." ".$enfermedad->campo}}</option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="form-group row ">
                 <h5 class="col-md-4">Prescripción de medicamento</h5>
                 <div class="col-md-7">
                     <textarea type="text" class="form-control" id="prescripcion" name="prescripcion" cols="3" required></textarea>
                 </div>
            </div>

            <div class="form-group row ">
                <h5 class="col-md-4">Indicaciones</h5>
                  <div class="col-md-7">
                     <textarea type="text" class="form-control" id="indicaciones" name="indicaciones" cols="3" required></textarea>
                  </div>
            </div>
            <div class="form-group row ">
                {!! link_to(URL::previous(), 'Atrás', ['class' => 'btn btn-diliazul btn-md col-md-2 offset-md-6']) !!}
                <button type="submit" class="btn btn-primary col-md-2 offset-md-1">Siguiente</button>
            </div>
    </form>
    </div>
@endsection
