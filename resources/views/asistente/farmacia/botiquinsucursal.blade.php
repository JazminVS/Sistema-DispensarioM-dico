@extends('layouts.asistente')


@section('content')
    <div class="border-bottom border-dark">
        <h3 class="text-center titulo">ADMINISTRACION DE MEDICAMENTOS</h3>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="listamedicamentos"><span data-feather="folder-plus"></span>Botiquines</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="medicamentos"><span data-feather="plus-square"></span>Medicamentos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="botiquinsucursal"><span data-feather="folder-plus"></span>Medicamento en Sucursales</a>
                </li>
            </ul>
        </div>
    </nav>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Botiquin en Sucursales</li>
        </ol>
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