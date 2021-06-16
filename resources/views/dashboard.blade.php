<x-app-layout>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @section('content')
                        <div class="containerins">
                        <div class="insta">
                            <div class="intt">
                            <h1>Piscina Climatizada</h1>
                           <p class="textod"> Entre nuestras instalaciones se encuentra una piscina climatizada de la que podrás disfrutar en cualquier momento, para ejercitarte o relajarte dependiendo del momento</p>
                            </div>
                            <div class="intf">
                            <img width="600px" height="550px" style="margin-bottom: 20px" src="http://localhost/elmonte/public/storage/img/piscina.jpg">

                            </div>
                        </div>

                        <div class="insta">
                            <div class="intf">
                                <img width="600px" height="550px" style="margin-bottom: 20px" src="http://localhost/elmonte/public/storage/img/salamusculo.jpg">
                            </div>
                            <div class="intt">
                                <h1>Sala Musculación</h1>
                                <p class="textod"> Disponemos de una sala de musculacion ideal tanto para la hipertrofia como para la fuerza</p>
                            </div>

                        </div>
                        <div class="insta">
                            <div class="intt">
                                <h1>Sala Actividades</h1>
                                <p class="textod"> Dispondrás de todo tipo de clases grupales, para ponerte en forma a la vez que te ejercitas</p>
                            </div>
                            <div class="intf">
                                <img width="600px" height="550px" style="margin-bottom: 20px" src="http://localhost/elmonte/public/storage/img/salaactividades.jpg">
                            </div>
                        </div>
                        <div class="insta">
                            <div class="intf">
                                <img width="600px" height="550px" style="margin-bottom: 20px" src="http://localhost/elmonte/public/storage/img/salacardio.jpg">
                            </div>
                            <div class="intt">
                                <h1>Sala Cardio</h1>
                                <p class="textod">La zona ideal para perder peso o ganar resistencia,usa nuestra sala de cardio para ejercitarte al maximo.</p>
                            </div>

                        </div>



                       <!-- <a href="{{ url('actividad/index?aaaa') }}" class="btn btn-warning">Lunes</a>-->


                        </div>
                    @endsection

                </div>
            </div>
        </div>
    </div>
    <x-slot name="footer">

    </x-slot>
</x-app-layout>
