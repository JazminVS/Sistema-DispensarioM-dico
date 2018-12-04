@extends('layouts.asistente')


@section('content')
    <h4>Ingreso de Pacientes</h4>
    <hr/>
    <form class="offset-md-1" method="POST" action="{{route('pacienteasis')}}">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="nombres" class="col-md-2 col-form-label">Nombres</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="nombres" name="nombres">
            </div>
            <label for="nombres" class="col-md-2 col-form-label">Apellidos</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="nombres" name="apellidos">
            </div>
        </div>
        <div class="form-group row">
            <label for="cedula" class="col-md-2 col-form-label">Cedula de identidad</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="cedula" name="cedula">
            </div>
            <label for="fecha_nacimiento" class="col-md-2 col-form-label">Fecha de nacimiento</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">
            </div>
        </div>
        <div class="form-group row">
            <label for="lugar" class="col-md-2 col-form-label">Lugar de nacimiento</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="lugar" name="lugar">
            </div>
            <label for="estado_civil" class="col-md-2 col-form-label">Estado civil</label>
            <div class="col-md-3">
            <select id="" class="form-control" name="estado_civil">
                @foreach($estado_civil as $estado)
                    <option value="{{$estado->id}}">{{$estado->descripcion}}</option>
                @endforeach
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="genero" class="col-md-2 col-form-label">Genero</label>
            <div class="col-md-3">
                <select class="form-control" name="genero">
                    @foreach($generos as $genero)
                        <option value="{{$genero->id}}">{{$genero->descripcion}}</option>
                    @endforeach
                </select>
            </div>
            <label for="edad" class="col-md-2 col-form-label">Edad</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="edad" name="edad" placeholder="23">
            </div>
        </div>
        <div class="form-group row">
            <label for="nivel_instruccion" class="col-md-2 col-form-label">Nivel de Instrucción</label>
            <div class="col-md-3">
                <select class="form-control" name="instruccion">
                    @foreach($tipo_instruccion as $instruccion)
                        <option value="{{$instruccion->id}}">{{$instruccion->descripcion}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="profesion" class="col-md-2 col-form-label">Profesion</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="profesion" name="profesion"
                       placeholder="Tecnico Industrial">
            </div>
            <label for="ocupacion" class="col-md-2 col-form-label">Ocupacion</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="ocupacion" name="ocupacion">
            </div>
        </div>
        <div class="form-group row">
            <label for="direccion" class="col-md-2 col-form-label">Direccion domiciliaria</label>
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
            <div class="col-md-3">

                <textarea class="form-control rounded-0" id="direccion" name="direccion" rows="3"></textarea>
            </div>
            <div class="col-md-2">
                <label for="telf1" class="col-form-label">telefono convencional</label>
            </div>
            <div class="col-md-3">
                <input type="text" class="form-control" id="telf1" name="telf1" placeholder="(02)3010856">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-5">
                <label for="contacto" class=" col-form-label">Contacto de emergencia</label>
                <input type="text" class="form-control" id="contacto" name="contacto">
            </div>
            <div class="col-md-5">
                <label for="telf1" class="col-form-label">telefono convencional</label>
                <input type="text" class="form-control" id="telf1" name="telf3" placeholder="(02)3010856">
            </div>
        </div></br>
        <div class="form-group row">
            <label for="discapacidad" class="col-md-2 col-form-label">Discapacidad</label>
            <div class="col-md-1">
                <label class="radio-inline">
                    <input type="radio" id="discapacidad" value="true" name="discapacidad">Si</label>
                <label class="radio-inline">
                    <input type="radio" id="discapacidad" value="false" name="discapacidad">No</label>
            </div>
            <label for="carnet" class="col-md-1 col-form-label">No.carnet</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="carnet" name="carnet">
            </div>
        </div>
        <div class="form-group row">
            <label for="nivel_instruccion" class="col-md-2 col-form-label">Tipo Discapacidad</label>
            <div class="col-md-3">
                <select class="form-control" name="tipo_discapacidad">
                    @foreach($tipo_discapacidad as $discapacidad)
                        <option value="{{$discapacidad->id}}">{{$discapacidad->descripcion}}</option>
                    @endforeach
                </select>
            </div>
            <label for="carnet" class="col-md-2 col-form-label">Porcentaje(%)</label>
            <div class="col-md-3">
                <input type="text" class="form-control" id="carnet" name="porcentaje" placeholder="10">
            </div>
        </div>

        <button class="btn btn-bd-primary" type="submit">ACEPTAR</button>

    </form>
    </br>
@endsection