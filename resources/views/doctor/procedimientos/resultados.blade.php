@extends('layouts.dashboard')

@section('content')
    <div class="border-bottom border-dark">
        <h3 class="text-center text-dilipa">PROCEDIMIENTOS</h3>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Lista de Pacientes</li>
            <li class="breadcrumb-item"><a href="{{ url()->previous()}}">Datos del Procedimiento</a></li>
            <li class="breadcrumb-item active">Procedimientos Realizado</li>
        </ol>
    </nav>

    <h5 class="text-center text-dilipa">PROCEDIMIENTO REALIZADO</h5>
    @include('flash::message')

    <div>
        @if($procedimientos->isEmpty())
            <p>No existen registros</p>
        @else

        @endif
    </div>

@endsection