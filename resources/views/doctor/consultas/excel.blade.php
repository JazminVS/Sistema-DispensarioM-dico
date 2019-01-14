<html>
<head></head>
<body>
<table class="table table-responsive-md table-sm">
    <thead>
        fgfg
    </thead>
    <tr>
        <th>FECHA</th>
        <th>HORA</th>
        <th>PACIENTE</th>
        <th>MOTIVO DE CONSULTA</th>
        <th>TIPO DE DIAGNOSTICO</th>
        <th>ENFERMEDAD (CIE)</th>
    </tr>
    </thead>
    <tbody>
    @foreach($consultas as $consulta)
        <tr>
            <td>{!! $consulta->fecha_consulta!!}</td>
            <td>{!! $consulta->hora_consulta!!}</td>
            <td>{!! $consulta->pk_id_paciente!!}</td>
            <td>{!! $consulta->motivo_consulta !!}</td>
            @foreach($diagnosticos as $diagnostico)
                @if($consulta->id == $diagnostico->pk_id_consulta)
                    <td>{!! $diagnostico->indicaciones !!}</td>
                    @foreach($cies as $cie)

                    @endforeach
                @endif
            @endforeach
        </tr>
    @endforeach
    </tbody>
</table>
</body>

</html>