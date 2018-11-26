@extends('layouts.dashboard')

@section('content')
    <div class="container">
                <h4>Diagnóstico</h4>
                <div class="form-group row ">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tipo de diagnóstico</label>
                    <select class="form-control col-sm-3">
                        @foreach($diagnosticos as $diagnostico)
                            <option>{{$diagnostico->descripcion}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group row ">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Enfermedad</label>
                    <div class="col-sm-8">
                        <select data-placeholder="Your Favorite Football Team" class="chosen-select" tabindex="3">
                        @foreach($diagnosticos as $diagnostico)
                                <option>{{$diagnostico->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row ">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Prescripcion de medicamento</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword" placeholder="">
                    </div>
                </div>

                <div class="form-group row ">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Indicaciones</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="inputPassword" placeholder="">
                    </div>
                </div>

                <button type="button" class="btn btn-primary ">Guardar</button>

            </div>
@endsection

<script>
    $('.select-tag').chosen({

    });
</script>