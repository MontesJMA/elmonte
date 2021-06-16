
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <!-- Styles -->
    <style>
        .header {
            background-size: cover;

            font-family: sans-serif;
            font-weight: bold;
        }

        .header .navbar {
            background-color:white !important;
            opacity: 70%;
        }

        body {
            font-family: 'Nunito';
            background-image: url("http://localhost/elmonte/public/storage/img/welcomefinal.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            width: 100%;
            height: 100vh;
            position: relative;

        }

        #loginyregistro{
            align-content: end;
        }

        .somos{
            margin-top: 120px;
            margin-left: 570px;
            position:relative;
            color: white;
            background:rgba(135, 135, 134, 0.52);
            width: 700px;
            height: 550px;
            float: left;
            font-weight: bold;
            font-size: 70pt;

        }

        .map{
            float: right;
            margin-right: 100px;
            margin-top: 80px;
        }

        .event a {
            background-color: #5FBA7D !important;
            color: #ffffff !important;
        }

    </style>

</head>
<body>
<header class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}"> <img width="200px" height="150px" src="http://localhost/elmonte/public/storage/img/logotipo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/clases') }}">Actividades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contacto') }}">¿Donde estámos?</a>
                </li>
            </ul>

            @if (Route::has('login'))
                <ul class="navbar-nav" id="loginyregistro">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>

                    @else

                        <li class="nav-item" >
                            <a class="nav-link" href="{{ route('login') }}">Log in</a>
                        </li>


                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>


                        @endif

                    @endauth

                    @endif
                </ul>
        </div>
    </nav>
</header>
<div class="somos">
    ENTRENA EN EL MEJOR GIMNASIO DE ESPAÑA
</div>
</body>
</html>


