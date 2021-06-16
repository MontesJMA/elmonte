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
            height: 100vh;
            position: relative;

        }

        #loginyregistro{
            align-content: end;
        }

     .somos{
        margin-top: 120px;
        margin-left: 50px;
         position:relative;
         color: white;
         background-color: gray;
         width: 800px;
         height: 400px;
         float: left;
         background:rgba(21, 21, 19, 0.2);
         font-size: 14pt;

     }

        .map{
            float: right;
            margin-right: 100px;
            margin-top: 80px;
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
        <h3>¿Dondé Estamos?</h3>
        <p>El gimnasio de "ElMonte" se encuentra en la localidad de Benamejí, en la provincia de Córdoba (Andalucía). En la zona de la perifireia, para disponer de un gran espacio y rodeado de naturaleza y aire limpio.</p>
        <br><br>
        <h3>Valores</h3>
        <p>Nuestros valores representan los ideales que nos importan y diferencian en nuestro día a día. Son los criterios que nos sirven para orientar nuestro camino y guiar nuestro trabajo.<br>
        Estos son el esfuerzo, constancia, profesionalidad y compañerismo. Estos son los valores que nos representa y que influenciamos en toda nuestra comunidad.
        </p>
    </div>

<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3174.821204684142!2d-4.53666052883606!3d37.2756666963636!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2ses!4v1615283461909!5m2!1ses!2ses" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
</body>
</html>
