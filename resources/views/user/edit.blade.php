<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Usuario') }}
        </h2>
    </x-slot>

    @section('content')
        <div class="formulario3">
        <br>
            <div class="formulario3dentro">

            <form   method="POST" action="{{url('user/'.$myuser->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="id">ID</label> @error('id')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="id" id="id" value="{{$myuser->id}}" placeholder="id">
            </div><br>
            <div class="form-group">
                <label for="name">Name</label> @error('name')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="name" id="name" value="{{$myuser->name}}" placeholder="name">
            </div><br>
            <div class="form-group">
                <label for="usuario">Usuario</label> @error('usuario')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="usuario" class="form-control" name="usuario" id="usuario" value="{{$myuser->usuario}}" placeholder="usuario">
            </div><br>
            <div class="form-group">
                <label for="email">Email</label> @error('email')    <span style="color: red; margin-left: 10px;">   *{{$message}} </span> @enderror
                <input type="text" class="form-control" name="email" id="email" value="{{$myuser->email}}" placeholder="email">
            </div>

            <input type="hidden" class="form-control" name="password" id="password" value="{{$myuser->password}}" placeholder="password">

            <br>

            <input type="submit" class="botonbonito">
        </form>
            </div>
        </div>
    @endsection
</x-app-layout>
