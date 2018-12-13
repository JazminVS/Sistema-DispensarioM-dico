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
                <li class="nav-item active">
                    <a class="nav-link" href="botiquinasucursales"><span data-feather="folder-plus"></span>BOTIQUINES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="botiquinsucursal"><span data-feather="folder-plus"></span>MEDICAMENTO EN SUCURSALES</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
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