<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <div div class="img-box">
                <img src="../assets/logo1.png" class="w-40" alt="logo">
            </div>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="my-5 text-center">
                <h4 class="text-md font-semibold">Admin Login</h4>
            </div>
            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>

            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
