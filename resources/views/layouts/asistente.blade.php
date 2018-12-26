<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-calable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="{{asset('img/icono.png')}}">
    <title>Asistente</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/asistente.css')}}" rel="stylesheet">

    <!--CALENDARIO ENLACES1-->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
<nav class="navbar navbar-expand navbar-dark fixed-top flex-md-nowrap p-0 shadow logo dilipa">
    <img src="{{asset('img/logo1.png')}}" class="navbar-brand col-sm-3 col-md-2 mr-0" alt="logo_dispensario" width="100px" height="100px">
    <div class="navbar-text mr-0 mr-md-3 offset-md-1 col-md-6">
        <h4 class="text-light">SISTEMA DE SALUD DISPENSARIO MÉDICO DILIPA</h4>
    </div>
    <ul class="navbar-nav text-light col-md-4 list-inline">
        @guest
            <li class="list-inline-item">
                <a href="{{ route('register') }}">{{ __('Registrarse') }}</a>
            </li>
            @else
            <li class="list-inline-item nav-link">Bienvenido usuario(a) {{ Auth::user()->name }}</li>
            <li class="list-inline-item">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Cerrar sesión') }}<span data-feather="corner-down-left"></span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </li>
        @endguest
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar">
            <div class="sidebar-sticky dilipa">
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
                <div class="list-group list-group-mine">
                    <a href="home" class="list-group-item">
                        <span data-feather="home"></span>
                        PERFIL
                    </a>
                    <a href="#" class="list-group-item">
                        <span data-feather="calendar"></span>
                        CITAS MEDICAS
                    </a>
                    <a href="paciente" class="list-group-item">
                        <span data-feather="folder-plus"></span>
                        PROCEDIMIENTOS
                    </a>
                    <a href="pacientes" class="list-group-item">
                        <span data-feather="user-plus"></span>
                        PACIENTES
                    </a>
                    <a class="list-group-item">
                        <span data-feather="eye"></span>
                        EXAMEN FISICO
                    </a>

                    <a href="listamedicamentos" class="list-group-item">
                        <span data-feather="briefcase"></span>
                        MEDICAMENTOS
                    </a>
                    <a href="reportes" class="list-group-item">
                        <span data-feather="clipboard"></span>
                        REPORTES
                    </a>

                </div>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 ">
            @yield('content')<br>
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
