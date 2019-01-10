@extends('layouts.dashboard')

@section('content')
    <div class="border-bottom border-dilipa">
        <h3 class="text-center text-dilipa">CONSULTA MEDICA</h3>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url()->previous()}}">Lista de Pacientes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Consulta Médica</li>
        </ol>
    </nav>
    <?PHP
    $id=$paciente->id;
    //echo $id_paciente;
    ?>
    <h5 class="text-primary text-center">DATOS DE CONSULTA MÉDICA</h5><br>


<div class="container offset-md-1 col-md-11">
    @include('flash::message')
    <form class="form-horizontal" method="POST" action="{{ route('registro') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6 form-group">
                <label for="nombres" class="col-form-label">PACIENTE</label>
                <input value="{{$paciente->id}}" name="paciente" style="display:none">
                <input value="{{$paciente->nombres." ".$paciente->apellido1." ".$paciente->apellido2}}" class="form-control" disabled>
            </div>
            <div class="col-md-3 form-group">
                <label for="fecha" class="col-form-label ">FECHA</label>
                <input type="text" class="form-control col-md-8" id="datepicker" name="fecha">
                <script>
                    $('#datepicker').datepicker({
                        format: "yyyy/mm/dd",
                        uiLibrary: 'bootstrap4',
                        onSelect: function(date) {
                            alert(date);
                        }
                    });
                </script>
            </div>
            <div class="col-md-2 form-group">
                <label for="fecha" class="col-form-label">HORA</label>
                <input type="text" class="form-control" id="timepicker" name="hora">
                <script>
                    $('#timepicker').timepicker({
                        timeFormat: 'h:mm:ss',
                        interval: 60,
                        minTime: '20',
                        maxTime: '6:00pm',
                        dynamic: true,
                        dropdown: true,
                        scrollbar: true,
                        uiLibrary: 'bootstrap4',
                        onSelect: function(date) {
                                alert(date);
                        }
                    });
                </script>
            </div>
        </div>

        <div class="form-group">
            <label for="nombres" class="col-form-label">MOTIVO</label>
            <textarea type="submit" class="form-control col-md-8" type="text" rows="2" name="motivo" required></textarea>
        </div>
        <div class="form-group">
            <label for="nombres" class="col-form-label">EXAMEN FISICO</label>
            <textarea type="submit" class="form-control col-md-8" type="text" rows="2" name="examen"></textarea>
        </div>
        <div class="form-group">
            <label for="nombres" class="col-form-label">OBSERVACIONES</label>
            <textarea type="submit" class="form-control col-md-8" type="text" rows="2" name="observaciones" required></textarea>
        </div>
        <br>
    <div class="form-group row ">
        <a href="{{URL::previous()}}"><span style="font-size: 1.3em;"><i class="fas fa-chevron-left"></i> Atrás</span></a>
        <button type="submit" class="btn btn-primary col-md-2 btn-md offset-md-8">
            ACEPTAR
        </button>
    </div>
    </form>
</div>
    <br/>
@endsection
