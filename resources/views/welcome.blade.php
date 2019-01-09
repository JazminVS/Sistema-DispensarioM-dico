<!doctype html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>Inicio Sistema Salud</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/inicio.css')}}" rel="stylesheet">


    <style>
        html, body {
            background-image: url("img/fondo2.png");
            background-size: 100% 200%;
            color: #00447c;
            font-family: 'Raleway', sans-serif;
            font-weight: 40;
            height: 60vh;
            margin: 0;
        }
        .container {
            min-width: 500px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row logo">
        <div class="col-md-3">
            <div class="py-4">
                <img class="d-block mx-auto mb-6" src="img/dili.png" alt="" width="500" height="100">
            </div>
        </div>
        <div class="col-md-9">
            <div class="py-4">
                <img class="d-block mx-auto mb-6" src="img/logo1.png" alt="" width="350" height="110">
            </div>
        </div>
    </div><br><br>

    <div class="row">
        <div class="col-md-12" style="align-content: center">
            <h2>SISTEMA DE SALUD</h2>
            <h4>Dispensario Médico Dilipa</h4>
                <div class="card offset-md-4">
                    <div class="card-body">
                        <h3>Sign In</h3>
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                            @csrf
                            <div class="col-auto">

                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="py-2"><i class="fas fa-user fa-lg fa-fw"></i></span>
                                    </div>
                                    <input id="email" placeholder="user@dilipa.edu.ec" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif


                                </div>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="py-2"><i class="fas fa-lock-open fa-lg fa-fw"></i></span>
                                    </div>
                                    <input id="password" placeholder="contraseña" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="offset-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                            {{ __('Recúerdame') }}
                                    </label>
                                </div>

                                <a for="customControlAutosizing" href="{{ route('password.request')}}">
                                    Olvidaste la contraseña?</a>
                            </div>
                            <button type="submit" class="btn offset-md-5 entrar">{{ __('Entrar') }}</button>
                        </form><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="my-5 text-muted text-center text-small footer">
        <p class="mb-1">&copy;2018 Dispensario Medico Dilipa</p>
        <!--<ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>*/-->
    </div>
</div>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>


<!--
@if (Route::has('login'))
    <div class="top-right links">
       @auth
        <a href="{{ url('/home') }}">Home</a>
       @else
       <a href="{{ route('login') }}">INICIAR SESION</a>
       <a href="{{ route('register') }}">registro</a>
       @endauth
    </div>
@endif--->

