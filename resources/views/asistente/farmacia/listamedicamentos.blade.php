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
            <li class="breadcrumb-item active" aria-current="page">Agregar medicamentos a botiquines</li>
        </ol>
    </nav>

    <div>
        {{Form::open(['route'=>'listamedicamentos','method'=>'GET','class'=>'form-inline'])}}
        <h5 class="text-primary col-md-4">Agregar medicamento a Botiquines</h5>
        {{Form::text('nombre',null,['class'=>'form-control form-control-sm col-md-4 offset-md-2','placeholder'=>'Por nombre de medicamento'])}}
        <button class="btn btn-azul btn-sm col-md-1 " role="button" aria-pressed="true">
            <span data-feather="search"></span>
            Buscar
        </button>
        {{Form::close()}}
    </div>

    <div>


        <!-- /.box --><!-- Tabla Lista de Usuarios -->
            <br>
        <h6 class="text-primary col-md-4">Lista de medicamentos</h6>
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
    </div>
@endsection
