<x-app-layout>


    @section('content')


        <nav class="navbar navbar-light float-right">
            <form class="form-inline">

                <!--<input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Buscar por nombre" aria-label="Search">-->
               <div class="form-group">
                <select class="form-select" name="buscarpor">
                    <option value="lunes">Lunes</option>
                    <option value="martes">Martes</option>
                    <option value="miercoles">Miercoles</option>
                    <option value="jueves">Jueves</option>
                    <option value="viernes">Viernes</option>
                    <option value="sabado">Sabado</option>
                    <option value="domingo">Domingo</option>
                </select>
               </div>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </nav>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Dificultad</th>
                <th scope="col">Zona</th>
                <th scope="col">Tiempo</th>
                <th scope="col">Dia</th>
                <th><i class="fas fa-eye"></i></th>
                <th><i class="far fa-edit"></i></th>
                <th><i class="fas fa-eraser"></i></th>
            </tr>
            </thead>
            <tbody>
            @foreach($myactivities as $activitie)
                <tr>
                    <td scope="row">{{$activitie->nombre}}</td>
                    <td scope="row">{{$activitie->dificultad}}</td>
                    <td scope="row">{{$activitie->zona}}</td>
                    <td scope="row">{{$activitie->tiempo}}</td>
                    <td scope="row">{{$activitie->dia}}</td>



                    <td><a href="{{url('actividad/'.$activitie->id)}}" class="btn btn-primary">Detalle</a></td>
                    <td><a href="{{url('actividad/'.$activitie->id.'/edit')}}" class="btn btn-warning">Editar</a></td>
                    <td>
                        <form action="{{url('actividad/'.$activitie->id)}}" method="POST">
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
        <x-slot name="footer">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Fisico') }}
            </h2>
        </x-slot>
</x-app-layout>
