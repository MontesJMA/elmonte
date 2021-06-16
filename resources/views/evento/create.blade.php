<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Añade Nuevo Fisico') }}
        </h2>
    </x-slot>

    @section('content')

                @if(!isset($_GET["nombre"]))

                    <div class="formularioevento1">
                                <br>

                                        <div class="imagenevento1">
                                            <i class="fas fa-diagnoses" style="font-size: 250px; margin-top: 15px; margin-left: 20px;"></i>
                                        </div>
                                        <div class="formulariodentroevento1">

<br><br><br>
                                                <form action="">
                                                    <div class="form-group">
                                                        <label for="nombre"><b>Evento</b></label>
                                                        <select class="form-select" name="nombre" id="nombre">
                                                            <option value="piscina">Piscina</option>
                                                            <option value="yoga">Yoga</option>
                                                        </select>

                                                     </div>
                                                    <br><br><br>
                                                    <input type="submit" name="siguiente" value="Siguiente" class="botonbonito1">
                                                </form>

                                        </div>
                    </div>

                    @endif
                    @if(isset($_GET["nombre"])&&!isset($_GET["fecha"]))

                        <div class="formularioevento2">
                            <br>

                            <div class="imagenevento2">
                                <i class="far fa-calendar-alt" style="font-size: 250px; margin-top: 15px; margin-left:  60px;"></i>
                            </div>
                            <div class="formulariodentroevento2">
                                <br><br><br>

                            <form action="">
                            <div class="form-group">
                                <label for="dia"><b>Fecha</b></label>
                                <input type="text" id="datepicker" class="form-control" min="<?php echo date("Y-m-d");?>" name="fecha" placeholder="Fecha" autocomplete="off">

                            </div><br> <br><br>
                            <input type="submit" name="siguiente" value="siguiente" class="botonbonito1">
                            <input type="hidden" name="nombre" value="{{$_GET["nombre"]}}">
                        </form>

                            </div>
                        </div>

                        <script>


                            $( function() {

                                // An array of dates
                                var eventDates = {};
                                @foreach($fechasdeshabilitadas as $fechades)

                                    eventDates[ new Date("{{\Carbon\Carbon::parse($fechades->fecha)->format("m-d-Y")}}")] = new Date("{{\Carbon\Carbon::parse($fechades->fecha)->format("m-d-Y")}}");

                                    @endforeach


                                // datepicker
                                $('#datepicker').datepicker({
                                    minDate: new Date(),
                                    beforeShowDay: function( date ) {
                                        $ .datepicker.noWeekends;
                                        var highlight = eventDates[date];
                                        if( highlight ) {
                                            return [false, "event", 'Tooltip text'];
                                        } else {
                                            return [true, "event", 'Tooltip text'];
                                        }
                                    }
                                });
                            });
                        </script>
                @endif
                @if(isset($_GET["nombre"])&&isset($_GET["fecha"]))
                        <div class="formularioevento3">
                            <br>
                            <div class="imagenevento3">
                                <i class="far fa-clock" style="font-size: 250px; margin-top: 15px; margin-left:  60px;"></i>
                            </div>
                            <div class="formulariodentroevento3">
                                <br><br>
        <!-- Ambos funcionan route y url
        <form   method="POST" action="{{route('actividad.store')}}" enctype="multipart/form-data"> -->
            <form   method="POST" action="{{url('evento')}}" enctype="multipart/form-data">
                @csrf

               <br>

@php
$horas=array("11:00:00"=>"11:00-12:00","13:00:00"=>"13:00-14:00","17:00:00"=>"17:00-18:00");
                @endphp

                <div class="form-group">
                    <label for="nombre"><b>Hora</b></label>
                    <select class="form-select" name="hora" id="hora">
                        @foreach($horas as $horaindice=>$hora)

                            @if(!in_array($horaindice,$horasdeshabilitadas))
                                <option value="{{$horaindice}}">{{$hora}}</option>
                                @endif


                        @endforeach

                    </select>
                </div><br><br> <br>


                <input type="submit" class="botonbonito1" value="Reservar">
                <input type="hidden" name="nombre" value="{{$_GET["nombre"]}}">
                <input type="hidden" name="fecha" value="{{$_GET["fecha"]}}">
            </form>
                            </div>
                        </div>
                    @endif


    @endsection
</x-app-layout>
