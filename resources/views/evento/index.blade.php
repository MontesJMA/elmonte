<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Evento') }}
        </h2>
    </x-slot>

    @section('content')

        <table class="table">
            <thead>
            <tr>
                @if(\Illuminate\Support\Facades\Auth::user()->hasAnyRole('admin'))
                    <th scope="col">Usuario</th>
                    @endif
                <th scope="col">Nombre</th>
                <th scope="col">Dia</th>
                <th scope="col">Hora</th>

                <th>Cancelar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($myeventos as $evento)
                <tr>
                    @if(\Illuminate\Support\Facades\Auth::user()->hasAnyRole('admin'))
                        <td scope="row">{{$evento->user_id}}</td>
                    @endif
                    <td scope="row">{{$evento->nombre}}</td>
                    <td scope="row">{{$evento->fecha}}</td>
                    <td scope="row">{{$evento->hora}}</td>





                    <td>
                        <form action="{{url('evento/'.$evento->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" name="borrar">Anular</button>
                        </form>
                    </td>


                </tr>
            @endforeach
            </tbody>
        </table>
    @endsection
</x-app-layout>

