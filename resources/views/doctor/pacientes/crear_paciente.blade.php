@extends('layouts.dashboard')
@section('content')
    <div class="border-bottom border-dilipa">
        <h3 class="text-center text-dilipa">PACIENTES</h3>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="pacientes">Lista de Pacientes</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nuevo paciente</li>
        </ol>
    </nav>
    <h5 class="text-primary col-md-8">Formulario Nuevo Paciente</h5>
    <form class="offset-md-1" method="POST" action="{{route('agregarpaciente')}}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="nombres" class="col-form-label">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres">
            </div>
            <div class="col-md-4 form-group">
                <label for="nombres" class="col-form-label ">Apellido Paterno</label>
                <input type="text" class="form-control" id="nombres" name="apellido1">
            </div>
            <div class="col-md-4 form-group">
                <label for="nombres" class="col-form-label ">Apellido Materno</label>
                <input type="text" class="form-control" id="nombres" name="apellido2">
            </div>

        </div>
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="genero" class="col-form-label">Genero</label>
                <select class="form-control col-md-8" name="genero">
                    @foreach($generos as $genero)
                        <option value="{{$genero->id}}">{{$genero->descripcion}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 form-group">
                <label for="fecha_nacimiento" class="col-form-label">Fecha de nacimiento</label>
                <input id="datepicker" width="276" name="fecha_nacimiento" class="col-md-9">
                <script>
                    $('#datepicker').datepicker({
                        uiLibrary: 'bootstrap4',
                        onSelect: function(date) {
                            alert(date);
                        }
                    });
                </script>
            </div>
            <div class="col-md-4 form-group">
                <label for="lugar" class="col-form-label">Lugar de nacimiento</label>
                <input type="text" class="form-control" id="lugar" name="lugar">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="estado_civil" class="col-form-label">Estado civil</label>
                <select id="" class="form-control col-md-8" name="estado_civil">
                    @foreach($estado_civil as $estado)
                        <option value="{{$estado->id}}">{{$estado->descripcion}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 form-group">
                <label for="cedula" class="col-form-label">Cedula de identidad</label>
                <input type="text" onkeypress="return aceptNum(event)" onpaste="return false;" class="form-control col-md-8" id="cedula" name="cedula" maxlength="10">
                <script>
                    var nav4 = window.Event ? true : false;
                    function aceptNum(evt){
                        var key = nav4 ? evt.which : evt.keyCode;
                        return (key <= 13 || (key>= 48 && key <= 57));
                    }
                </script>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4 form-group">
                <label for="sucursal" class="col-form-label">Sucursal</label>
                <select class="form-control col-md-8" name="sucursal" id="sucursal">
                    @foreach($sucursales as $sucursal)
                        <option value="{{$sucursal->id}}">{{$sucursal->descripcion}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 form-group">
                <label for="area" class="col-form-label">Area</label>
                <input type="text" class="form-control" id="area" name="area">
            </div>
            <div class="col-md-4 form-group">
                <label for="puesto" class="col-form-label">Puesto</label>
                <input type="text" class="form-control" id="puesto" name="puesto"><br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="nivel_instruccion" class="col-form-label">Nivel de Instrucción</label>
                <select class="form-control col-md-8" name="instruccion">
                    @foreach($tipo_instruccion as $instruccion)
                        <option value="{{$instruccion->id}}">{{$instruccion->descripcion}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4 form-group">
                <label for="profesion" class=" col-form-label">Profesion</label>
                <input type="text" class="form-control" id="profesion" name="profesion">
            </div>
            <div class="col-md-4 form-group">
                <label for="ocupacion" class="col-form-label">Ocupacion</label>
                <input type="text" class="form-control" id="ocupacion" name="ocupacion">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="direccion" class="col-form-label">Direccion domiciliaria</label>
                <textarea class="form-control" rows="2" id="direccion" name="direccion"></textarea>
            </div>
            <div class="col-md-4 form-group">
                <label for="telf1" class="col-form-label">Telf. convencional</label>
                <input type="text" onkeypress="return aceptNum(event)" onpaste="return false;" class="form-control" id="telf1" name="telf1" maxlength="10">
                <script>
                    var nav4 = window.Event ? true : false;
                    function aceptNum(evt){
                        var key = nav4 ? evt.which : evt.keyCode;
                        return (key <= 13 || (key>= 48 && key <= 57));
                    }
                </script>
            </div>
            <div class="col-md-4 form-group">
                <label for="telf2" class="col-form-label">Nro. celular</label>
                <input type="text" onkeypress="return aceptNum(event)" onpaste="return false;" class="form-control" id="telf2" name="telf2" maxlength="10">
                <script>
                    var nav4 = window.Event ? true : false;
                    function aceptNum(evt){
                        var key = nav4 ? evt.which : evt.keyCode;
                        return (key <= 13 || (key>= 48 && key <= 57));
                    }
                </script>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 form-group">
                <label for="contacto" class="col-form-label">Contacto de emergencia</label>
                <input type="text" class="form-control" id="contacto" name="contacto">
            </div>
            <div class="col-md-4 form-group">
                <label for="telf3" class="col-form-label">Telf.convencional</label>
                <input type="text" onkeypress="return aceptNum(event)" onpaste="return false;" class="form-control" id="telf3" name="telf3" maxlength="10">
                <script>
                    var nav4 = window.Event ? true : false;
                    function aceptNum(evt){
                        var key = nav4 ? evt.which : evt.keyCode;
                        return (key <= 13 || (key>= 48 && key <= 57));
                    }
                </script>
            </div>
            <div class="col-md-4 form-group">
                <label for="telf4" class="col-form-label">Nro. celular</label>
                <input type="text" onkeypress="return aceptNum(event)" onpaste="return false;" class="form-control" id="telf4" name="telf4" maxlength="10">
                <script>
                    var nav4 = window.Event ? true : false;
                    function aceptNum(evt){
                        var key = nav4 ? evt.which : evt.keyCode;
                        return (key <= 13 || (key>= 48 && key <= 57));
                    }
                </script>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 offset-md-1 form-group">
                <label for="discapacidad" class="col-form-label">Discapacidad</label><br>
                <label class="radio offset-md-1 col-form-label">
                    <input type="radio" id="discapacidad" value="true" name="discapacidad">Si</label>
                <label class="radio offset-md-1 col-form-label">
                    <input type="radio" id="discapacidad" value="false" name="discapacidad">No</label>
            </div>
            <div class="col-md-2 form-group">
                <label for="carnet" class="col-form-label">No.carnet</label>
                <input type="text" onkeypress="return aceptNum(event)" onpaste="return false;" class="form-control" id="carnet" name="carnet" maxlength="10">
                <script>
                    var nav4 = window.Event ? true : false;
                    function aceptNum(evt){
                        var key = nav4 ? evt.which : evt.keyCode;
                        return (key <= 13 || (key>= 48 && key <= 57));
                    }
                </script>
            </div>
            <div class="col-md-2 form-group">
                <label for="nivel_instruccion" class="col-form-label">Tipo Discapacidad</label>
                <select class="form-control" name="tipo_discapacidad">
                    @foreach($tipo_discapacidad as $discapacidad)
                        <option value="{{$discapacidad->id}}">{{$discapacidad->descripcion}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2 form-group">
                <label for="carnet" class="col-form-label">Porcentaje(%)</label>
                <input type="text" onkeypress="return aceptNum(event)" onpaste="return false;" class="form-control" id="carnet" name="porcentaje" maxlength="3">
                <script>
                    var nav4 = window.Event ? true : false;
                    function aceptNum(evt){
                        var key = nav4 ? evt.which : evt.keyCode;
                        return (key <= 13 || (key>= 48 && key <= 57));
                    }
                </script>
            </div>
        </div>

        <button type="submit" class="btn btn-dilipa btn-md" >CREAR PACIENTE</button>
        <?php
        $data = array ([
            'Azuay' =>[
                'Cuenca','Chordeleg','Gualaceo','Paule','Sigsig','Giron','Nabón','Paute','Pucara','San Fernando',
                'Santa Isabel','Sigsig','Oña','Chordeleg','Camilo Ponce Enriquez',
            ],
            'Bolivar' => [
                'Guaranda','San Miguel de Bolviar','Chimbo','Caluma','Chillanes','Echeandia','Las Naves'
            ],
            'Cañar' => [
                'Cañar','El Tambo','Biblian','Suscal','Azoguez','Déleg','La Troncal'
            ],
            'Carchi' => [
                'Espejo','Mira','Montúfar','Bolívar','San Pedro de Huaca','Tulcan'
            ],

            'Cotopaxi' => [
                'Saquisili','Latacunga','Pujíli','Salcedo','Sigchos','Pangua','La Maná'
            ],
            'Chimborazo' => [
                'Riobamba','Guano','Chambo','Colla','Penipe','Guamote','Pallatanga'
            ],
            'El Oro' => [
                'Machala','El Guabo','Pasaje de las Nieves','Santa Rosa','Las lajas','Arenillas','Huaquillas','Chilla',
                'Atahualpa','Piñas','Balsas','Marcavelí','Zaruma'
            ],
            'Esmeraldas' => [
                'Esmeraldas','Quininde','Muisne','Atacames','Río Verde','Eloy Alfaro','San Lorenzo'
            ],
            'Guayas' => [
                'Guayaquil','Daule','Nobol','Salitre','Lomas de Sarjentillo','Samborondón','Durán','Isidro Ayora','Santa Lucia',
                'Yaguachi','Palestina','Pedro Carbo','Alfredo Baquerizo Moreno(Jujan)','Milagro','Colines','Simon Bolivar','Naranjito',
                'Marcelino Marilueña','Balzar','El Triunfo','Naranjal','Bucay','General Villamil(Playas)','Embalao','El Empale'
            ],
            'Imbabura' => [
                'Ibarra','Antonio Ante','Urcuqui','Cotacachi','Otavalo','Pimampiro'
            ],
            'Loja' => [
                'Gonzanamá','Payas','Calvas','Ilanga','Olmedo','Catamayo','Sozoranga','Loja'
            ],
            'Los Rios' => [
                'Quevedo','San Jacinto de Buena Fe','Valencia','Mocache','Quinsaloma','Ventanas','Palenque','Babahoyo','Pueblo Viejo','Urdaneta'
            ],
            'Manabi' => [
                'Portoviejo','Rocafuerte','Santa Ana','Montecristi','Jaramijo','Sucre','Manta','Junín','Jipijapa','24 de Mayo','Tosagua','Bolivar'.
                'Olmedo','San Vicente','Chone','Paján','Puerto Lopez','Pichincha','Flavio Alfaro','Jama','Pedernales','El Carmen'
            ],
            'Morona Santiago' => [
                'Morona','Macas','Sucua','Logroño','Guamboya','Pablo Sexto','Santiago de Mendez','Palora',
                'Taisha','Tiguinza','Limon y danza','San Juan Bosco','Gualaquisa'
            ],
            'Napo' => [
                'Tena','Archidona','Carlos Julio Arosemena','Tola','Quijos','El Chaco'
            ],
            'Orellana' => [
                'Francisco de Orellana','Aguarico','La Joya de los Sachas','Loreto'
            ],
            'Pastaza' => [
                'Puyo','Mera','Santa Clara','Arajuno','Pastaza',
            ],
            'Pichincha' => [
                'Quito','Tumiñahui','Pedro Moncayo','Cayambe','Mejía','San Miguel de los Bancos','Pedro Vicente Maldonado','Puerto Quito'
            ],
            'Santa Elena' => [
                'Santa Elena','La Libertad','Salinas'
            ],
            'Sucumbios' => [
                'Lago Agrio (Nueva Loja)','Shusufindi','Sucumbios','Cascales','Gonzalo Pizarro','Cuyabeno','Putumayo'
            ],
            'Sto Domingo de los Tsachilas' => [
                'Santo Domingo','La Concordia'
            ],
            'Tungurahua' => [
                'Pelileo','Ambato','Patate','Pillaro','Cevallos','Quero','Tisaleo','Mocha'
            ],
            'Zamora Chinchipe' => [
                'Zamora','Centinela del Cóndor','Nangaritza','Yantzaza','Paquisha','Yacuambi','El Pangui','Palanda','Chinchipe'
            ],
            'Galapagos' => [
                'Puerto Baquerizo Moreno','San Cristobal','Isabela','Santa Cruz'
            ],

        ]);
        ?>
    </form>
@endsection