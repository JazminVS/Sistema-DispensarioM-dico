@extends('layouts.asistente')


@section('content')
<div>
    <div class="border-bottom border-dark">
        <h5 class="text-center text-dark">REGISTRO DE PROCEDIMIENTOS</h5>
    </div><br>
    <form  method="POST" action="{{route('ingreso_procedimiento')}}" class="offset-md-1">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fecha" class="col-form-label">Fecha</label>
                    <input type="text" class="form-control col-md-6" id="fecha" name="fecha">
                    <script>
                        $('#fecha').datepicker({
                            uiLibrary: 'bootstrap4',
                            onSelect: function(date) {
                                alert(date);
                            }
                        });
                    </script>
                </div>
                <div class="form-group">
                    <label for="atencion" class="col-form-label">Atendido por</label>
                    <select class="form-control col-md-8" id="atencion" name="atencion">
                        @foreach($atencion as $att)
                            <option value="{{$att->id}}">{{$att->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nombres" class="col-form-label">Diagnostico</label>
                    <input type="text" class="form-control col-md-10" id="nombres" name="diagnostico">
                    <small id="nombres" class="form-text text-muted">Por favor señale en este espacio su diagnóstico.</small>
                </div>
                <div class="form-group">
                    <label for="tipo sano" class="col-form-label">Sano</label>
                    <select id="" class="form-control col-md-8" name="sano">
                        @foreach($sanos as $sano)
                            <option value="{{$sano->id}}">{{$sano->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="vigilancia" class="col-form-label">Vigilancia de la Salud</label>
                    <select id="" class="form-control col-md-8" name="vigilancia">
                        @foreach($vigilancia as $salud)
                            <option value="{{$salud->id}}">{{$salud->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nombres" class="col-form-label">Morbilidad</label>
                    <select id="" class="form-control col-md-8" name="morbilidad">
                        @foreach($morbilidad as $morbil)
                            <option value="{{$morbil->id}}">{{$morbil->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <h6 class="offset-md-4">Datos del paciente</h6>
                <div class="form-group">
                    <label for="nombres" class="col-form-label">Nombres y Apellidos</label>
                    <input type="text" class="form-control" id="nombres" name="paciente" value="{{$paciente->id}}" style="display: none">
                    <input type="text" class="form-control col-md-10" id="nombres" name="nombres" value="{{$paciente->nombres." ".$paciente->apellidos}}" disabled>
                </div>
                <div class="form-group">
                    <label for="edad" class="col-form-label">Edad</label>
                    <input type="text" class="form-control col-md-5" id="edad" name="edad" value="{{$paciente->edad}}" disabled>
                </div>
                <div class="form-group">
                    <label for="nombres" class="col-form-label">Sucursal</label>
                    <?php
                    $id_sucursal=$paciente->pk_sucursal;
                    foreach ($sucursales as $sucursal =>$ids) {
                        $id=$ids->id;
                        if ($id==$id_sucursal){
                            $nombre_sucursal=$ids->descripcion;
                        }
                    }
                    ?>
                    <input type="text" class="form-control" id="nombres" name="sucursal" value="{{$id_sucursal}}" style="display: none">
                    <input type="text" class="form-control col-md-10" id="nombres" name="nombre_sucursal" value="{{$nombre_sucursal}}" disabled>
                </div>
                <div class="form-group">
                    <label for="nombres" class="col-form-label">Área</label>
                    <input type="text" class="form-control col-md-10" id="nombres" name="area" value="{{$paciente->area}}" disabled>
                </div>
                <div class="form-group">
                    <label for="nombres" class="col-form-label">Puesto</label>
                    <input type="text" class="form-control col-md-10" id="nombres" name="puesto" value="{{$paciente->puesto}}" disabled>
                </div>
        </div>

        <div class="form-group offset-md-5">
            <button class="btn btn-dilipa btn-md">ACEPTAR</button>
        </div>
        </div>
    </form>

@endsection