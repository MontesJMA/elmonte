<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Añade Nueva Actividad') }}
        </h2>
    </x-slot>

@section('content')

    <div class="formulario1">
        <br>
        <div class="formulario1dentro">
    <!-- Ambos funcionan route y url
        <form   method="POST" action="{{route('actividad.store')}}" enctype="multipart/form-data"> -->
        <form   method="POST" action="{{url('actividad')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label> @error('nombre')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
            </div><br>
            <div class="form-group">
                <label for="dificultad">Dificultad</label> @error('dificultad')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="dificultad" id="dificultad" placeholder="Dificultad">
            </div><br>
            <div class="form-group">
                <label for="zona">Zona</label> @error('zona')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="zona" id="zona" placeholder="zona">
            </div><br>
            <div class="form-group">
                <label for="tiempo">Tiempo</label> @error('tiempo')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="tiempo" id="tiempo" placeholder="Tiempo">
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
                <label for="imagen">Imagen</label>@error('imagen')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="file" class="form-control" name="imagen" id="imagen" placeholder="imagen">
            </div><br>


            <input type="submit" class="botonbonito" value="Crear">
        </div>
        </form>

    </div>
    @endsection
</x-app-layout>
