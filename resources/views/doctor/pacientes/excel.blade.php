<html>
<head></head>
<body>
<table class="table table-responsive-md table-sm">
    <thead>
    <tr>
        <th>APELLIDOS</th>
        <th>NOMBRES</th>
        <th>N° CEDULA</th>
        <th>FECHA NACIMIENTO</th>
        <th>GENERO</th>
        <th>ESTADO CIVIL</th>
        <th>LUGAR NACIMIENTO</th>
        <th>EDAD</th>
        <th>NIVEL DE INSTRUCCION</th>
        <th>PROFESION</th>
        <th>OCUPACIÓN</th>
        <th>SUCURSAL</th>
        <th>AREA</th>
        <th>PUESTO</th>
        <th>DIRECCION</th>
        <th>TELEFONOS</th>
        <th>CONTACTO DE EMERGENCIA</th>
        <th>TELEFONOS</th>
        <th>DISCAPACIDAD</th>
        <th>N° CARNET</th>
        <th>TIPO DE DISCAPACIDAD</th>
        <th>PORCENTAJE</th>
    </tr>
    </thead>
    <tbody>
    @foreach($pacientes as $paciente)
        <tr>
            <td>{!! $paciente->apellido1." ".$paciente->apellido2 !!}</td>
            <td>{!! $paciente->nombres !!}</td>
            <td>{!! $paciente->CI !!}</td>
            <td>{!! $paciente->fecha_nacimiento!!}</td>
            @foreach ($generos as $genero)
                @if($genero->id == $paciente->pk_genero)
                    <td>{!! $genero->descripcion!!}</td>
                @endif
            @endforeach
            @foreach ($estados as $estado)
                @if($estado->id == $paciente->pk_estado_civil)
                    <td>{!! $estado->descripcion!!}</td>
                @endif
            @endforeach
            <td>{!! $paciente->lugar_nacimiento!!}</td>
            <td>{!! $paciente->edad!!}</td>
            @foreach ($instruccion as $instruction)
                @if($instruction->id == $paciente->pk_nivel_instruccion)
                    <td>{!! $instruction->descripcion!!}</td>
                @endif
            @endforeach
            <td>{!! $paciente->profesion!!}</td>
            <td>{!! $paciente->ocupacion!!}</td>
            @foreach ($sucursales as $sucursal)
                @if($sucursal->id == $paciente->pk_sucursal)
                    <td>{!! $sucursal->descripcion!!}</td>
                @endif
            @endforeach
            <td>{!! $paciente->area!!}</td>
            <td>{!! $paciente->puesto!!}</td>
            <td>{!! $paciente->direccion!!}</td>
            <td>{!! '02'.$paciente->telf1.'-09'.$paciente->telf2!!}</td>
            <td>{!! $paciente->contacto!!}</td>
            <td>{!! '02'.$paciente->telf3.'-09'.$paciente->telf4!!}</td>
            @if($paciente->discapacidad == '1')
                <td> {!! 'Sí' !!} </td>
                <td>{!! $paciente->carnet!!}</td>
                @foreach ($discapacidades as $discapacidad)
                    @if($discapacidad->id == $paciente->pk_discapacidad)
                        <td>{!! $discapacidad->descripcion!!}</td>
                    @endif
                @endforeach
                <td>{!! $paciente->porcentaje.'%'!!}</td>
            @else
                <td>{!! 'No' !!}</td>
                <td>{!! 'No Aplica'!!}</td>
                <td>{!! 'No Aplica'!!}</td>
                <td>{!! 'No Aplica'!!}</td>
            @endif



        </tr>
    @endforeach
    </tbody>
</table>
</body>

</html>