<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Añade Nuevo Fisico') }}
        </h2>
    </x-slot>


@section('content')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card" style="background-color: black; color: white; margin-top: 40px; border-radius: 20px">
                        <div class="card-header">Suscribirse</div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <select name="plan" class="form-control" id="subscription-plan">
                                @foreach($plans as $key=>$plan)
                                    <option value="{{$key}}">{{$plan}}</option>
                                @endforeach
                            </select>
<br>
                            <input placeholder="Titular" class="form-control" id="card-holder-name" type="text">
<br>
                            <!-- Stripe Elements Placeholder -->
                            <div id="card-element"></div>
<br>

                                @php
                                    $user = auth()->user();
                                 if ($user->subscribed('main')) {

                              echo  "<button class='botonbonitoplanf' id='card-button' disabled='true'>";
                              echo  "Tiene una suscripción activa";
                           echo "</button>";



                                    }else{
                                @endphp
                            <button class="botonbonitoplan" id="card-button" data-secret="{{ $intent->client_secret }}">
                                Suscríbete
                            </button>
                            @php
                                }
                            @endphp


                        </div>
                    </div>
                </div>
            </div>
        </div>


    <script>

        window.addEventListener('load', function() {
            const stripe = Stripe('pk_test_51J1IW2JHwnDW5zljV3Gomsne2wW7lCLoY8dC0P8v9ZBGqIz0ZiRqWC3iMGZThBsEqDaKwBmnFjy9hrvAqG4Zv4sw00h5VcmwbI');

            const elements = stripe.elements();
            const cardElement = elements.create('card', {
                hidePostalCode: true});
            cardElement.mount('#card-element');
            const cardHolderName = document.getElementById('card-holder-name');
            const cardButton = document.getElementById('card-button');
            const clientSecret = cardButton.dataset.secret;
            const plan = document.getElementById('subscription-plan').value;
            cardButton.addEventListener('click', async (e) => {
                const { setupIntent, error } = await stripe.handleCardSetup(
                    clientSecret, cardElement, {
                        payment_method_data: {
                            billing_details: { name: cardHolderName.value }
                        }
                    }
                );
                if (error) {
                    // Display "error.message" to the user...
                } else {
                    // The card has been verified successfully...
                    console.log('handling success', setupIntent.payment_method);
                    axios.post('subscribe',{
                        payment_method: setupIntent.payment_method,
                        plan : plan
                    }).then((data)=>{
                        location.replace(data.data.success_url)
                    });
                }
            });
        })
    </script>
@endsection
</x-app-layout>
