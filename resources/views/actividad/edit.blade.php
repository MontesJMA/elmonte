<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Actividad') }}
        </h2>
    </x-slot>

    @section('content')
        <div class="formulario1">
        <br>
            <div class="formulario1dentro">
        <form   method="POST" action="{{url('actividad/'.$myactividad->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre</label> @error('nombre')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="nombre" id="nombre" value="{{$myactividad->nombre}}" placeholder="nombre">
            </div><br>
            <div class="form-group">
                <label for="dificultad">Dificultad</label> @error('dificultad')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="dificultad" id="dificultad" value="{{$myactividad->dificultad}}" placeholder="dificultad">
            </div><br>
            <div class="form-group">
                <label for="zona">Zona</label> @error('zona')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="zona" class="form-control" name="zona" id="zona" value="{{$myactividad->zona}}" placeholder="zona">
            </div><br>
            <div class="form-group">
                <label for="tiempo">Tiempo</label> @error('tiempo')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="tiempo" id="tiempo" value="{{$myactividad->tiempo}}" placeholder="tiempo">
            </div><br>
            <div class="form-group">
                <label for="dia">Dia</label> @error('dia')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <select class="form-select" name="dia" id="dia">
                    <option value="lunes">Lunes</option>
                    <option value="martes">Martes</option>
                    <option value="miercoles">Miercoles</option>
                    <option value="jueves">Jueves</option>
                    <option value="viernes">Viernes</option>
                    <option value="sabado">Sabado</option>
                    <option value="domingo">Domingo</option>
                </select>

            </div><br>


            <div class="form-group">
                <label for="imagen">Imagen</label> @error('imagen')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="file" class="form-control" name="imagen" id="imagen" value="{{$myactividad->imagen}}" placeholder="imagen">
                <div class="col-sm-4">
                    <img class="rounded float-left" width="20%" src="{{asset($url.$myactividad->imagen)}}">
                </div>
            </div>

            <br>

            <input type="submit" class="botonbonito" value="Editar">
        </form>
            </div>
        </div>
    @endsection
</x-app-layout>
