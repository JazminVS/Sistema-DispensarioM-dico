<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">

    <title>Inicio Sistema Salud</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template
    <link href="css/cover.css" rel="stylesheet">-->
    <style>
        html, body {
            background-image: url("img/fondo1.jpg");
            background-size: 150% 300%;
            color: #00447c;
            font-family: 'Raleway', sans-serif;
            font-weight: 40;
            height: 50vh;
            margin: 0;
        }
        .container {
            min-width: 500px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="img/logotipo.png" alt="" width="600" height="150">
        <h2>SISTEMA DE SALUD<br/>DISPENSARIO MÉDICO DILIPA</h2>
    </div>

    <div class="row">
        <div class="col-md-5 order-md-2">
            <h5 class="d-flex justify-content-between text-md-center">
                Inicio de sesion
            </h5>
            <!--<a href="{{ route('login') }}">Login</a>-->

                <div>
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-left">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-left">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
        <div class="col-md-7 order-md-1">
            555
        </div>
    </div>

    <div class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy;2018 Dispensario Medico Dilipa</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </div>
</div>
</body>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="bootstrap/assets/js/vendor/popper.min.js"></script>
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bootstrap/assets/js/vendor/holder.min.js"></script>
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

