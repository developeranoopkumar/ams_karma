<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">          
            
                <!-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> -->
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
            <div>
            <a href="/">
                <img src="{{asset('images/logo.png')}}" alt="asm-karma" width="60%" style="margin-left:20%;">
                </a>
            </div>
            <div style="">
            <h3 style="text-align:center; padding:10px 0px; color:white;">YOUR PERSONAL TRACKER AND COMPASS</h3>
            <p style="text-align:center; padding:0px 0px 12px 0px; color:white;">FROM</p>
            </div>
            <div>
                <img src="{{asset('images/anant-logo.jpg')}}" alt="asm-karma" width="30%" style="margin-left:35%;">
            </div>
           <br>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" style="color:#fff;"/>

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Enter email id" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" style="color:#fff;"/>

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" placeholder="Enter password"/>
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600" style="color:#fff;">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}" style="color:#fff;">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
