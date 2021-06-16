<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fisico') }}
        </h2>
    </x-slot>

    @section('content')

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Edad</th>
                <th scope="col">Peso</th>
                <th scope="col">Altura</th>
                <th scope="col">Complexion</th>
                <th scope="col">Objetivo</th>

                <th><i class="far fa-edit"></i></th>
                <th><i class="fas fa-eraser"></i></th>
            </tr>
            </thead>
            <tbody>
            @foreach($myfisicos as $fisico)
                <tr>
                    <td scope="row">{{$fisico->usuario}}</td>
                    <td scope="row">{{$fisico->edad}}</td>
                    <td scope="row">{{$fisico->genero}}</td>
                    <td scope="row">{{$fisico->altura}}</td>
                    <td scope="row">{{$fisico->complexion}}</td>
                    <td scope="row">{{$fisico->objetivo}}</td>




                    <td><a href="{{url('fisico/'.$fisico->id.'/edit')}}" class="btn btn-warning">Editar</a></td>
                    <td>
                        <form action="{{url('fisico/'.$fisico->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" name="borrar">Borrar</button>
                        </form>
                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    @endsection
</x-app-layout>

