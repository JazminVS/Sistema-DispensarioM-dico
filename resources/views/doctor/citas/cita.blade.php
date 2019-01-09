@extends('layouts.dashboard')


@section('content')
    <div class="border-bottom border-dilipa">
        <h3 class="text-center text-dilipa">CITAS MÉDICAS</h3>
    </div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Consulta Médica</li>
        </ol>
    </nav>
    @include('layouts.calendario')
@endsection
