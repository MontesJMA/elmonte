<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
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
            background-image: url("http://localhost/elmonte/public/storage/img/fondocontactohq.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            width: 100%;
            height: 100%;
            position: relative;

        }

        #loginyregistro{
            align-content: end;
        }

        .somos{
            margin-top: 130px;
            margin-left: 50px;
            position:relative;
            color: white;
            background-color: gray;
            width: 800px;
            height: 200px;
            float: left;
            background:rgba(21, 21, 19, 0.2);
            font-size: 14pt;

        }

        .map{
            float: right;
            margin-right: 100px;
            margin-top: 30px;
        }

        .somos1{
            margin-top: 100px;
            margin-right: 50px;
            position:relative;
            color: white;
            background-color: gray;
            width: 800px;
            height: 200px;
            float: right;
            background:rgba(21, 21, 19, 0.2);
            font-size: 14pt;

        }

        .map1{
            float:left;
            margin-left:20px;
            margin-top: 100px;
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
    <h3>Natación</h3>
    <p>
        Por deporte o por diversión, son muchas las razones por las que es beneficiosa la natación.<br>
    Tiene beneficios como producir bajo impacto sobre los huesos y articulaciones, mayor flexibilidad y elasticidad, quema grasas además de muchas más.</p>
</div>

<div class="map">
    <img width="750px" height="550px" src="http://localhost/elmonte/public/storage/img/piscina.jpg">
</div>

<div class="map1">
    <img width="750px" height="550px" src="http://localhost/elmonte/public/storage/img/claseyoga.jpg">
</div>
<div class="somos1">
    <h3>Yoga</h3>
    <p>
        El yoga es una práctica que conecta el cuerpo, la respiración y la mente. Esta práctica utiliza posturas físicas, ejercicios de respiración y meditación para mejorar la salud general. El yoga se desarrolló como una práctica espiritual hace miles de años. Hoy en día la mayoría de las personas en occidente hace yoga como ejercicio y para reducir el estrés.
    </p>
</div>


</body>
</html>
