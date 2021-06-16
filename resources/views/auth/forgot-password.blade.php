<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="{{ url('/') }}">
                <div style="margin-left: 100px; margin-bottom: 20px;">
                <img width="200px" height="150px" src="http://localhost/elmonte/public/storage/img/logotipowhite.png">
                </div>
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray">
            {{ __('¿Has olvidado tu contraseña? Sin problema. Déjenos tu email y le enviaremos un email con un link que le permita elegir una nueva contraseña.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
