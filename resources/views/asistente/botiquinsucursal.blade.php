@extends('layouts.asistente')


@section('content')
    <div class="border-bottom border-dark">
        <h4 class="text-dark">ADMINISTRACION DE MEDICAMENTOS</h4>
    </div>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto offset-5">
                <li class="nav-item">
                    <a class="nav-link" href="medicamentos"><span data-feather="plus-square"></span>CREAR MEDICAMENTO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="botiquinasucursales"><span data-feather="folder-plus"></span>BOTIQUINES</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="botiquinsucursal"><span data-feather="folder-plus"></span>MEDICAMENTO EN SUCURSALES</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <h5 class="text-center text-uppercase">Medicamento en Sucursales</h5>
    <div class="form-group col-md-5 offset-md-1">
        <label for="tipo_medicamento">Sucursal</label>
        <select class="form-control" id="tipo_medicamento" name="tipo">
            @foreach($sucursales as $sucursal)
                <option value="{{$sucursal->id}}">{{$sucursal->descripcion}}</option>
            @endforeach
        </select>
    </div>
@endsection