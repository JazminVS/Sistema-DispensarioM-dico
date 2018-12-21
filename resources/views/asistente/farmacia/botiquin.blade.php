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
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a>Lista de Medicamentos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Agregar medicamento a Sucursales</li>
        </ol>
    </nav>
    <br>

    <?php
            //echo $medicamento;
    ?>
    <div class="offset-md-1">
    <h5 class="text-center text-uppercase">Asignación botiquin  a Sucursales</h5>
    <form  method="POST" action="{{route('agregarmedicamento')}}">
        {{ csrf_field() }}
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="datepicker">Fecha de entrega</label>
            <input id="datepicker" class="col-6" name="fecha" required>
            <script>
                $('#datepicker').datepicker({
                    uiLibrary: 'bootstrap4',
                    onSelect: function(date) {
                        alert(date);
                    }
                });
            </script>
        </div>
        <div class="form-group col-md-6 ">
            <label for="Sucursal">Sucursal</label>
            <select class="form-control col-5" id="Sucursal" name="sucursal">
                @foreach($sucursales as $sucursal)
                    <option value="{{$sucursal->id}}">{{$sucursal->descripcion}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-row">
         <div class="form-group col-md-6">
             <label for="">Nombre</label>
             <input type="text" class="form-control col-10"  value="{{$medicamento->nombre}}" disabled>
             <input type="text" class="form-control col-10" id="" name="medicamento" value="{{$medicamento->id}}" style="display: none">
         </div>
        <div class="form-group col-md-3">
            <label>Cantidad a entregar</label>
            <input type="text" class="form-control col-10" name="cantidad_entrega">
        </div>
        <div class="form-group col-md-3">
            <label>Cantidad en farmacia</label>
            <input type="text" class="form-control col-10" value="{{$medicamento->cantidad}}" disabled>
            <input type="text" class="form-control col-10" id="" name="cantidad_farmacia" value="{{$medicamento->cantidad}}" style="display: none">
        </div>
    </div>
        <button type="submit" class="btn btn-dilipa">AGREGAR</button>
    </form>
    </div>

@endsection