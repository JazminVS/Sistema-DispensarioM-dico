@extends('layouts.paciente')

@section('content')
    <h4>Datos de filiación</h4>
    <hr/>
    <form class="offset-md-1">
        <div class="form-group row">
            <label for="nombres" class="col-md-2 col-form-label">Nombres y Apellidos</label>
            <div class="col-md-8">
                <input disabled type="text" class="form-control" id="nombres" name="paciente"
                       value="{!!$paciente->nombres," ",$paciente->apellidos!!}">
            </div>
        </div>
        <div class="form-group row">
                <label for="cedula" class="col-md-2 col-form-label">Cedula de identidad</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="cedula" name="cedula"
                       value="{!!$paciente->CI !!}">
            </div>
                <label for="fecha_nacimiento" class="col-md-2 col-form-label">Fecha de nacimiento</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento"
                       value="{!!$paciente->fecha_nacimiento !!}">
            </div>
        </div>
        <div class="form-group row">
            <label for="lugar" class="col-md-2 col-form-label">Lugar de nacimiento</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="lugar" name="lugar"
                       value="{!!$paciente->lugar_nacimiento !!}">
            </div>
            <label for="estado_civil" class="col-md-2 col-form-label">Estado civil</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="estado_civil" name="estado_civil" placeholder="soltero">
            </div>
        </div>
        <div class="form-group row">
            <label for="genero" class="col-md-2 col-form-label">Genero</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="genero" name="genero" >
            </div>
            <label for="edad" class="col-md-2 col-form-label">Edad</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="edad" name="edad" placeholder="23">
            </div>
        </div>
        <div class="form-group row">
            <label for="nivel_instruccion" class="col-md-2 col-form-label">Nivel de Instrucción</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="nivel_instruccion" name="nivel_instruccion">
            </div>
        </div>
        <div class="form-group row">
            <label for="profesion" class="col-md-2 col-form-label">Profesion</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="profesion" name="profesion"
                       placeholder="Tecnico Industrial">
            </div>
            <label for="ocupacion" class="col-md-2 col-form-label">Ocupacion</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="asistente tecnico">
            </div>
        </div>
        <div class="form-group row">
            <label for="direccion" class="col-md-2 col-form-label">Direccion domiciliaria</label>
            <div class="col-md-3">
                <textarea class="form-control rounded-0" id="direccion" name="direccion" rows="3"></textarea>
            </div>
            <label for="telf1" class="col-md-2 col-form-label">telefono convencional</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="telf1" name="telf1" placeholder="asistente tecnico">
            </div>
        </div>
        <div class="form-group row">
            <label for="contacto" class="col-md-2 col-form-label">Contacto de emergencia</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="contacto" name="direccion">
            </div>
            <label for="telf3" class="col-md-2 col-form-label">telefono convencional</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="telf3" name="telf3" placeholder="asistente tecnico">
            </div>
        </div>
        <div class="form-group row">
            <label for="discapacidad" class="col-md-2 col-form-label">Discapacidad</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="discapacidad" name="discapacidad">
            </div>
            <label for="carnet" class="col-md-2 col-form-label">No.carnet</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="carnet" name="carnet" placeholder="asistente tecnico">
            </div>
        </div>
        <div class="form-group row">
            <label for="discapacidad" class="col-md-2 col-form-label">Tipo</label>
            <label for="discapacidad" class="col-md-1 col-form-label">Fisica  %</label>
            <div class="col-md-2">
                <input type="text" class="form-control" id="discapacidad" name="discapacidad">
            </div>
            <label for="discapacidad" class="col-md-1 col-form-label">Intelectual%</label>
            <div class="col-md-2">
                <input type="text" class="form-control" id="discapacidad" name="discapacidad">
            </div>
        </div>
        <div class="form-group row">
            <label for="discapacidad" class="col-md-1 offset-md-2 col-form-label">Mental%</label>
            <div class="col-md-2">
                <input type="text" class="form-control" id="discapacidad" name="discapacidad">
            </div>
            <label for="discapacidad" class="col-md-1 col-form-label">Auditiva%</label>
            <div class="col-md-2">
                <input type="text" class="form-control" id="discapacidad" name="discapacidad">
            </div>
        </div>
        <div class="form-group row">
            <label for="discapacidad" class="col-md-1 offset-md-2 col-form-label">Visual %</label>
            <div class="col-md-2">
                <input type="text" class="form-control" id="discapacidad" name="discapacidad">
            </div>
        </div>
        <button class="btn btn-bd-primary">EDITAR</button>

    </form>
    </br>
@endsection