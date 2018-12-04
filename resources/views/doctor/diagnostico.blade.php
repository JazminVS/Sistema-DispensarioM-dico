@extends('layouts.dashboard')

@section('content')
    <div class="container offset-1">
                <h4>Diagnóstico</h4>
        <form class="form-horizontal" method="POST" action="{{route('insertardiagnostico')}}">
                <?php

                echo"Consulta ingresada correctamente",$id_consulta;
                ?>
            <input value="{{$id_consulta}}" name="consulta" style="display:none">
            <div class="form-group row ">
            <label for="inputPassword" class="col-md-3 col-form-label">Tipo de diagnóstico</label>
            <div class="col-md-7">
                 <select class="form-control col-md-4" name="diagnostico">
                      @foreach($diagnosticos as $diagnostico)
                      <option value="{{$diagnostico->id}}">{{$diagnostico->descripcion}}</option>
                      @endforeach
                 </select>
            </div>
            </div>

            <div class="form-group row ">
                 <label for="inputPassword" class="col-md-2 col-form-label">Enfermedad</label>
                <div class="col-md-7">

                </div>
            </div>

            <div class="form-group row ">
                 <label for="prescripcion" class="col-md-3 col-form-label">Prescripcion de medicamento</label>
                 <div class="col-md-7">
                     <textarea type="text" class="form-control" id="prescripcion" name="prescripcion" cols="3"></textarea>
                 </div>
            </div>

            <div class="form-group row ">
                 <label for="indicaciones" class="col-md-3 col-form-label">Indicaciones</label>
                  <div class="col-md-7">
                     <textarea type="text" class="form-control" id="indicaciones" name="indicaciones" cols="3"></textarea>
                  </div>
            </div>
            <button type="sumbit" class="btn btn-primary offset-md-9">Guardar</button>
    </form>
    </div>
@endsection
