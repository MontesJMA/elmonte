<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">


      <link  rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
        <script src="https://js.stripe.com/v3/"></script>

        <style>
            #footer {
                height: 200px;
                background-color: #33414F;
                color: white;
            }

            .container {
                min-height: calc(100vh - 200px);

            }

            .event a {
                background-color: green !important;
                color: #ffffff !important;

            }

            .navlogeado{
                background:rgba(51, 65, 79, 0.99);
                height: 70px;
                color: white !important;
            }

            x-nav-link{
                color: white !important;
            }

            x-nav-link.colorletra:hover{
                color: white !important;
            }

            .textod{
                font-size: 18pt;
            }
            .containerins{
                display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                background-color:#f3f4f6;

            }
            .insta{
               margin-top: 50px;
                margin-bottom: 50px;
                display: flex;
                background-color: white;
                width: 100%;
                border-style: solid;
                border-width: 2px;
                border-color: black;
                border-radius: 20px;
            }
            .intt{
                float: left;
                margin-top: 15px;
                margin-left: 40px;
                width: 500px;
            }
            .intf{
                float: left;
                margin-top: 15px;
                margin-left: 40px;
            }
            .formulario1{
                margin-top: 20px;
                background-color: black;
                height:580px;
                width: 620px;
                margin-left: 280px;
                border-radius: 20px;
                color: white;
            }
            .formulario2{
                margin-top: 20px;
                background-color:black;
                height:580px;
                width: 620px;
                margin-left: 280px;
                border-radius: 20px;
                color: white;
            }

            .blue-highlight {
                background-color: #0C91FF !important;
                color: white !important;
            }

            .blue-highlight:hover {
                background-color: #0A70FF !important;
            }

            .red-highlight {
                background-color: #FF3205 !important;
                color: white !important;
            }

            .red-highlight:hover {
                background-color: #FF0800 !important;
            }

            .formularioevento1{
                margin-top: 40px;

                background-color:black;
                height:340px;
                width: 1040px;
                margin-left: 120px;
                border-radius: 20px;
                color: white;
            }

            .formulariodentroevento1{
                margin-right: 30px;
                margin-left: 110px;
                width:580px;
                height: 320px;
                float:left;
            }

            .formularioevento2{
                margin-top: 40px;

                background-color:black;
                height:340px;
                width: 1040px;
                margin-left: 120px;
                border-radius: 20px;
                color: white;
            }

            .formulariodentroevento2{
                margin-right: 30px;
                margin-left: 110px;
                width:580px;
                height: 320px;
                float:left;

            }

            .imagenevento2{
                float: left;
                height: 275px;
                width: 275px;


            }


            .formularioevento3{
                margin-top: 40px;

                background-color:black;
                height:340px;
                width: 1040px;
                margin-left: 120px;
                border-radius: 20px;
                color: white;
            }

            .formulariodentroevento3{
                margin-right: 30px;
                margin-left: 110px;
                width:580px;
                height: 320px;
                float:left;

            }

            .imagenevento3{
                float: left;
                height: 275px;
                width: 275px;


            }

            .botonbonito1{
                background-color: white;
                color: black;
                border-radius: 20px;
                height: 30px;
                width: 100px;
                margin-left: 230px;
            }


            .cajaevento1{
                display: flex;

            }


            .imagenevento1{
                float: left;
                height: 275px;
                width: 275px;


            }

            .bodyformulario2{


            }

            .formulario1dentro{
                margin-left: 20px;
                width:580px;
                height: 560px;
            }

            .botonbonito{
                background-color: white;
                color: black;
                border-radius: 20px;
                height: 30px;
                width: 60px;
            }


            .botonbonitoplanf{
                background-color: dimgrey;
                color: black;
                border-radius: 20px;
                height: 30px;
                width: 250px;
            }


            .botonbonitoplan{
                background-color: white;
                color: black;
                border-radius: 20px;
                height: 30px;
                width: 80px;
            }

            .formulario2dentro{
                margin-left: 20px;
                width:580px;
                height: 560px;
            }

            .formulario3dentro{
                margin-left: 20px;
                width:580px;
                height: 560px;
            }
            .formulario3{
                margin-top: 20px;
                background-color:black;
                height:415px;
                width: 620px;
                margin-left: 280px;
                border-radius: 20px;
                color: white;
            }
            .detalleac{
                margin-right:40px;
            }

            .espaciofooter{
              margin-top: 20px;
            }

            .footerlado{
                margin-left: 120px;
            }

            .espacioparanav{
                margin-left: 500px;
            }

            .paranavlogo{
                margin-left: 200px;
            }

            .paranavlogo1{
                margin-left: 30px;
            }

            .tituloactividad{
               color: white;
                background-color: #2d3748;
                width: 400px;
                border-radius: 20px;
                height: 60px;
            }

            .StripeElement {
                box-sizing: border-box;
                height: 40px;
                padding: 10px 12px;
                border: 1px solid transparent;
                border-radius: 4px;
                background-color: white;
                box-shadow: 0 1px 3px 0 #e6ebf1;
                -webkit-transition: box-shadow 150ms ease;
                transition: box-shadow 150ms ease;
            }
            .StripeElement--focus {
                box-shadow: 0 1px 3px 0 #cfd7df;
            }
            .StripeElement--invalid {
                border-color: #fa755a;
            }
            .StripeElement--webkit-autofill {
                background-color: #fefde5 !important;
            }

        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->


            <!-- Page Content -->
            <main class="bodyformulario2">
                <div class="container">
                    @yield('content')
                </div>
            </main>
                <footer class="" id="footer">
                    <div class="row">
                        <div class="col-4">
                            <ul class="footerlado">
                                <br>
                                <li class="espaciofooter">
                                    ¿Quiénes Somos?
                                </li>
                                <li class="espaciofooter">
                                    Seguridad e higéne
                                </li>
                                <li class="espaciofooter">
                                    Personal y monitores
                                </li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul class="footerlado">
                            <br>
                                <li class="espaciofooter">
                                    Sobre Nosotros
                                </li>
                                <li class="espaciofooter">
                                    Preguntas Frecuentes

                                </li>
                                <li class="espaciofooter">
                                    Política de privacidad

                                </li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul class="footerlado">
                            <!-- Links -->
                          <li><br>
                               <h6> Contact</h6>
                            </li>
                           <li><i class="fab fa-youtube  espaciofooter"></i></i> New York, NY 10012, US</li>

                           <li>    <i class="fas fa-envelope me-3  espaciofooter"></i>
                                info@example.com</li>

                              <li>  <i class="fas fa-phone me-3  espaciofooter"></i> + 01 234 567 88</li>

                            </ul>
                        </div>

                    </div>

                </footer>
        </div>
    </body>
</html>
