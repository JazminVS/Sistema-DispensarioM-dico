@extends('layouts.dashboard')

@section('content')
    <div class="border-bottom border-dilipa">
        <h3 class="text-center text-dilipa">CONSULTA MEDICA</h3>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a >Lista de Pacientes</a></li>
            <li class="breadcrumb-item" aria-current="page"><a>Consulta Médica</a></li>
            <li class="breadcrumb-item active" aria-current="page">Diagnóstico</li>
        </ol>
    </nav>
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
                    <select id="" class="form-control col-md-8" name="enfermedades" id="enfermedades">
                        <option>1</option>
                        <option>2</option>
                        <option>Ecuador</option>
                        <option>Economia</option>
                    </select>

                    <script type="text/javascript">
                        $(document).ready(function () {
                            $("#enfermedades").select2();
                        })
                    </script>
                </div>
            </div>

            <div class="form-group row ">
                 <h5 class="col-md-4">Prescripción de medicamento</h5>
                 <div class="col-md-7">
                     <textarea type="text" class="form-control" id="prescripcion" name="prescripcion" cols="3"></textarea>
                 </div>
            </div>

            <div class="form-group row ">
                <h5 class="col-md-4">Indicaciones</h5>
                  <div class="col-md-7">
                     <textarea type="text" class="form-control" id="indicaciones" name="indicaciones" cols="3"></textarea>
                  </div>
            </div>
            <button type="sumbit" class="btn btn-primary offset-md-10">Guardar</button>
    </form>
    </div>
@endsection
