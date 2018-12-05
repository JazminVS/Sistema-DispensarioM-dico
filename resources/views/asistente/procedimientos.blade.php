@extends('layouts.asistente')


@section('content')
    <h4>Registro de Procedimientos</h4>
    <hr/>
    <form  method="POST" action="{{route('ingreso_procedimiento')}}">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="fecha" class="col-md-2 col-form-label">Fecha</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="fecha" name="fecha">
            </div>
            <label for="atencion" class="col-md-2 offset-md-1 col-form-label">Atendido por</label>
            <div class="col-md-3">
                <select id="" class="form-control" id="atencion" name="atencion">
                    @foreach($atencion as $att)
                        <option value="{{$att->id}}">{{$att->descripcion}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nombres" class="col-md-2 col-form-label">Nombres y Apellidos</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="nombres" name="paciente" value="{{$paciente->id}}" style="display: none">
                <input type="text" class="form-control" id="nombres" name="nombres" value="{{$paciente->nombres." ".$paciente->apellidos}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="nombres" class="col-md-2 col-form-label">Sucursal</label>
            <?php
                $id_sucursal=$paciente->pk_sucursal;
                foreach ($sucursales as $sucursal =>$ids) {
                    $id=$ids->id;
                    if ($id==$id_sucursal){
                        $nombre_sucursal=$ids->descripcion;
                    }
            }
            ?>
            <div class="col-md-2">
                <input type="text" class="form-control" id="nombres" name="sucursal" value="{{$id_sucursal}}" style="display: none">
                <input type="text" class="form-control" id="nombres" name="nombre_sucursal" value="{{$nombre_sucursal}}">
            </div>
            <label for="nombres" class="col-md-2 col-form-label">Área</label>
            <div class="col-md-2">
                <input type="text" class="form-control" id="nombres" name="area" value="{{$paciente->area}}">
            </div>
            <label for="nombres" class="col-md-1 col-form-label">Puesto</label>
            <div class="col-md-2">
                <input type="text" class="form-control" id="nombres" name="puesto" value="{{$paciente->puesto}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="edad" class="col-md-2 col-form-label">Edad</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="edad" name="edad">
            </div>
        </div>
        <div class="form-group row">
            <label for="tipo sano" class="col-md-2 col-form-label">Sano</label>
            <div class="col-md-2">
                <select id="" class="form-control" name="sano">
                    @foreach($sanos as $sano)
                        <option value="{{$sano->id}}">{{$sano->descripcion}}</option>
                    @endforeach
                </select>
            </div>
            <label for="vigilancia" class="col-md-2 col-form-label">Vigilancia de la Salud</label>
            <div class="col-md-2">
                <select id="" class="form-control" name="vigilancia">
                    @foreach($vigilancia as $salud)
                        <option value="{{$salud->id}}">{{$salud->descripcion}}</option>
                    @endforeach
                </select>
            </div>
            <label for="nombres" class="col-md-1 col-form-label">Morbilidad</label>
            <div class="col-md-2">
                <select id="" class="form-control" name="morbilidad">
                    @foreach($morbilidad as $morbil)
                        <option value="{{$morbil->id}}">{{$morbil->descripcion}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nombres" class="col-md-2 col-form-label">Diagnostico</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="nombres" name="diagnostico">
            </div>
        </div>
        <div class="form-group row">
            <button CLASS="btn btn-danger">ACEPTAR</button>
        </div>
    </form>
@endsection