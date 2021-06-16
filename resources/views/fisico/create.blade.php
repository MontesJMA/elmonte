<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Añade Nuevo Fisico') }}
        </h2>
    </x-slot>

@section('content')

            <div class="formulario2">
                <br>
    <!-- Ambos funcionan route y url
        <form   method="POST" action="{{route('actividad.store')}}" enctype="multipart/form-data"> -->
                <div class="formulario2dentro">
        <form   method="POST" action="{{url('fisico')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="usuario">Título</label>  @error('usuario')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Título">
            </div><br>
            <div class="form-group">
                <label for="edad">Edad</label> @error('edad')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="edad" id="edad" placeholder="Edad">
            </div><br>
            <div class="form-group">
                <label for="genero">Género</label> @error('genero')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="genero" id="genero" placeholder="Género">
            </div><br>
            <div class="form-group">
                <label for="complexion">Complexión</label>@error('complexion')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="complexion" id="complexion" placeholder="Complexión">
            </div><br>
            <div class="form-group">
                <label for="objetivo">Objetivo</label>@error('objetivo')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="objetivo" id="objetivo" placeholder="Objetivo">
            </div><br>
            <div class="form-group">
                <label for="altura">Altura</label>@error('altura')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="altura" id="altura" placeholder="Altura">
            </div><br>


            <input type="submit" class="botonbonito">
        </form>
                </div>
            </div>

    @endsection
</x-app-layout>
