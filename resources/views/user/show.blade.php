<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalle del usuario') }}
        </h2>
    </x-slot>

    @section('content')
        <h1>{{$myusers->name}}-{{$myusers->usuario}}</h1>
        <div class="row">


            </div>
        </div>
    @endsection
</x-app-layout>

