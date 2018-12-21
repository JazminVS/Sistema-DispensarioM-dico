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
            <li class="breadcrumb-item active" aria-current="page">Lista de Medicamentos</li>
        </ol>
    </nav>

    <div>
        <h6>Buscar medicamento</h6>
        <form class="form-inline my-2 my-lg-0">
            {{ csrf_field() }}
            <input class="form-control mr-sm-2 col-md-5" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
        <!-- /.box --><!-- Tabla Lista de Usuarios -->
            <br>
                <div class="box-body">
                    @if($medicamentos->isEmpty())
                        <p>No existen registros en la tabla de Medicamentos</p>
                    @else
                        <table class="table table-bordered table-dark">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Concentración</th>
                                <th>Cantidad</th>
                                <th>Fecha de ingreso</th>
                                <th>Fecha de reposicion</th>
                                <th>Tipo de medicamento</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($medicamentos as $medicamento)
                                <tr>
                                    <td>{!! $medicamento->nombre!!}</td>
                                    <td>{!! $medicamento->concentracion!!}</td>
                                    <td>{!! $medicamento->cantidad !!}</td>
                                    <td>{!! $medicamento->fecha_ingreso!!}</td>
                                    <td>{!! $medicamento->fecha_reposicion!!}</td>
                                    <?php
                                    $id_medicamento=$medicamento->fk_tipo_medicamento;
                                    foreach ($tipo_medicamento as $tipomedicamen=>$ids) {
                                        $id=$ids->id;
                                        if ($id==$id_medicamento){
                                            $nombre_medicamento=$ids->descripcion;
                                        }
                                    }
                                    ?>
                                    <td>{!! $nombre_medicamento !!}</td>
                                    <td>
                                        <a class="btn btn-outline-primary btn-sm" href="{{action('asistente\FarmaciaController@vermedicamento',$medicamento->id)}}">AGREGAR</a>
                                        <a class="btn btn-outline-primary btn-sm" href="{{action('asistente\FarmaciaController@editarmedicamento',$medicamento->id)}}">REPONER</a>
                                    </td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                <!-- /.box-body -->
@endsection