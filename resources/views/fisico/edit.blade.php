<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Fisico') }}
        </h2>
    </x-slot>

    @section('content')

    <div class="formulario2">
        <br>
        <div class="formulario2dentro">
        <form   method="POST" action="{{url('fisico/'.$myfisico->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="usuario">Título</label>  @error('usuario')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="usuario" id="usuario" value="{{$myfisico->usuario}}" placeholder="Título">
            </div> <br>
            <div class="form-group">
                <label for="edad">Edad</label>@error('edad')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="edad" id="edad" value="{{$myfisico->edad}}" placeholder="Edad">
            </div> <br>
            <div class="form-group">
                <label for="genero">Género</label>@error('genero')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="genero" id="genero" value="{{$myfisico->genero}}" placeholder="Género">
            </div> <br>
            <div class="form-group">
                <label for="complexion">Complexión</label>@error('complexion')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="complexion" id="complexion" value="{{$myfisico->complexion}}" placeholder="Complexión">
            </div> <br>
            <div class="form-group">
                <label for="objetivo">Objetivo</label>@error('objetivo')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="objetivo" id="objetivo" value="{{$myfisico->objetivo}}" placeholder="Objetivo">
            </div> <br>
            <div class="form-group">
                <label for="altura">Altura</label>@error('altura')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="altura" id="altura" value="{{$myfisico->altura}}" placeholder="Altura">
            </div>




            <br>

            <input type="submit" class="botonbonito">
        </form>
        </div>
    </div>
    @endsection
</x-app-layout>
