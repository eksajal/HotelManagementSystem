<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">




            <!-- Add Custom CSS here -->
            <style>
                /* Styling for the div element */
                .titlepage {
                    text-align: center;
                    padding-bottom: 40px;
                }

                /* Styling for the h2 element */
                .titlepage h2 {
                    position: relative;
                    /* Make h2 the reference point for ::before and ::after */
                    font-size: 40px;
                    color: #121212;
                    line-height: 45px;
                    font-weight: bold;
                    text-transform: uppercase;
                    padding: 0;
                    margin: 0;
                }

                /* Styling for the ::before pseudo-element */
                .titlepage h2::before {
                    position: absolute;
                    content: "";
                    background-color: #ff0909;
                    width: 20px;
                    height: 4px;
                    top: -2px;
                    /* Slightly above the title, closer to the 'L' */
                    left: 0;
                    /* Align with the start of the text (near 'L') */
                    transform: rotate(-36deg);
                    /* Rotate the element */
                }

                /* Styling for the ::after pseudo-element */
                .titlepage h2::after {
                    position: absolute;
                    content: "";
                    background-color: #ff0909;
                    width: 20px;
                    height: 4px;
                    bottom: 9px;
                    /* Slightly below the title, closer to the 'N' */
                    right: -15px;
                    /* Align with the end of the text (near 'N') */
                    transform: rotate(-36deg);
                    /* Rotate the element */
                }
            </style>



            <div class="titlepage">
                <h2>Login</h2>
            </div>


        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form style="padding: 20px; border: 4px solid red; border-top: none; border-left: none;" method="POST"
            action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a style="text-decoration: none;"
                        class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
