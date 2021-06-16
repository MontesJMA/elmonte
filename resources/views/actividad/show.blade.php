<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalle de la actividad') }}
        </h2>
    </x-slot>

    @section('content')
        <br>
       <div class="tituloactividad"> <h1 style="margin-left: 10px">{{$myactividad->nombre}}</h1></div><br>
        <div class="row" style="background-color: #2d3748; color: white; border-radius: 20px; height: 400px; align-content: center">
            <br>
            <div class="col-sm-4">
                <div class="detallesac">
                <img class="rounded float-left"  style="border-radius: 20px;"  width=3000" height="2900px"  src="{{asset($url.$myactividad->imagen)}}">
                </div>
            </div>
            <div class="col-1">

            </div>
            <div class="col-7">

                <h2 style="">Zona:  {{$myactividad->zona}}</h2><br>
                <h3  style="">Tiempo:  {{$myactividad->tiempo}}</h3><br>
                <h3  style="">Dia:  {{$myactividad->dia}}</h3><br>
                <h3  style="">Dificultad: {{$myactividad->dificultad}}</h3><br>


            </div>
        </div>
    @endsection
</x-app-layout>

