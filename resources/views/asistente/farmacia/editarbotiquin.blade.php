@extends('layouts.asistente')


@section('content')
    <div class="border-bottom border-dark">
        <h4 class="text-dark">ADMINISTRACION DE MEDICAMENTOS</h4>
    </div>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto offset-5">
                <li class="nav-item active">
                    <a class="nav-link" href="listamedicamentos"><span data-feather="folder-plus"></span>BOTIQUINES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="medicamentos"><span data-feather="plus-square"></span>CREAR MEDICAMENTO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="botiquinsucursal"><span data-feather="folder-plus"></span>MEDICAMENTO EN SUCURSALES</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="offset-md-1">
        <h5 class="text-center text-uppercase">Reposición de medicamento</h5>
        <form method="POST" class="offset-md-1" action="{{route('editar_medicamento')}}">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="datepicker">Fecha de reposición</label>
                    <input id="datepicker" width="276" name="fecha">
                    <script>
                        $('#datepicker').datepicker({
                            uiLibrary: 'bootstrap4',
                            onSelect: function(date) {
                                alert(date);
                            }
                        });
                    </script>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <input type="text" class="form-control" id="id_medicamento" name="id" value="{{$medicina->id}}" style="display: none">
                    <label for="nombre_medicamento">Nombre</label>
                    <input type="text" class="form-control" id="nombre_medicamento" name="nombre" value="{{$medicina->nombre}}">
                </div>
                <?php
                    $id_tipomed=$medicina->fk_tipo_medicamento;
                    foreach ($tipomedicamentos as $tipomedicamen=>$ids) {
                        $id=$ids->id;
                        if ($id==$id_tipomed){
                            $tipo_medicamento=$ids->descripcion;
                        }
                    }
                ?>
                <div class="form-group col-md-5 offset-md-1">
                    <label for="tipo_medicamento">Tipo</label>
                    <select class="form-control" id="tipo_medicamento" name="tipo" value="{{$tipo_medicamento}}">
                        @foreach($tipomedicamentos as $tipo)
                            <option value="{{$tipo->id}}">{{$tipo->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-5">
                    <label for="concentracion">Concentracion</label>
                    <input type="text" class="form-control" id="concentracion" name="concentracion" value="{{$medicina->concentracion}}">
                </div>
                <div class="form-group col-md-5 offset-md-1">
                    <label for="cantidad">Cantidad</label>
                    <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{$medicina->cantidad}}">
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-dilipa">EDITAR</button>
        </form>
    </div>
@endsection