<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('img/icono.png')}}">
    <title>Asistente</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/asistente.css')}}" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-dark fixed-top flex-md-nowrap p-0 shadow navbar-laravel logo dilipa">
    <img src="{{asset('img/logo1.png')}}" class="navbar-brand col-md-2 mr-0" alt="logo_dispensario" width="auto" height="auto">
    <div class="navbar-text">
        <h4 class="text-light">SISTEMA DE SALUD DISPENSARIO MÉDICO DILIPA</h4>
    </div>
    <ul class="navbar-nav px-3 text-light">
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
            </li>
            @else
                Usuario: {{ Auth::user()->name }}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesión') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
                @endguest
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar dilipa">
            <div class="sidebar-sticky">
                <div href="#" class="list-group-item flex-column align-items">
                    <div class="row">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="col-sm-5 col-md-4">
                            <img src="{{asset('img/asistente.png')}}" alt="icono_asistente" width="70" height="60">
                        </div>
                        <div class="col-sm-5 offset-sm-0 col-md-8 h6">
                            Asistente<br>
                            <small>Jazmin Villamarin</small>
                        </div>
                    </div>
                </div>
                <div class="list-group text-uppercase group" >
                    <a href="asistente" class="list-group-item list-group-item-action">
                        <span data-feather="home"></span>
                        Perfil
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <span data-feather="heart"></span>
                        Procedimientos
                    </a>
                    <a href="/asistente/usuario" class="list-group-item list-group-item-action">
                        <span data-feather="heart"></span>
                        Pacientes
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <span data-feather="heart"></span>
                        Citas médicas
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <span data-feather="heart"></span>
                        Farmacia
                    </a>
                </div>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4 ">
            @yield('content')
        </main>
    </div>
</div>
</body>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="bootstrap/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Icons -->
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace()
</script>

</html>
