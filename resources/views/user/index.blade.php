<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    @section('content')


        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Usuario</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>

                <th><i class="fas fa-user-edit"></i></th>
                <th><i class="far fa-trash-alt"></i></th>
            </tr>
            </thead>
            <tbody>
            @foreach($myusers as $myuser)
                <tr>
                    <td scope="row">{{$myuser->id}}</td>
                    <td scope="row">{{$myuser->usuario}}</td>
                    <td scope="row">{{$myuser->name}}</td>
                    <td scope="row">{{$myuser->email}}</td>






                    <td><a href="{{url('user/'.$myuser->id.'/edit')}}" class="btn btn-warning">Editar</a></td>
                    <td>
                        <form action="{{url('user/'.$myuser->id)}}" method="POST">
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

