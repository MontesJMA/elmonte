<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div style="margin-left: 100px">
                <a href="{{ url('/dashboard') }}">
                    <img width="200px" height="150px" src="http://localhost/elmonte/public/storage/img/logotipowhite.png">
                </a>
            </div>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('!Gracias por registrarte! Antes de empezar, ¿Podrías verificar tu dirección de email clicando en el link que te hemos enviado a tu correo? Si no has recivido el email, estaremos encantados de enviarle otro.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('Un nuevo link de verificación ha sido enviado a tu email proporcionado durante tu registro.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Reenviar email de verificación') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log out') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
