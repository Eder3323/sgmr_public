<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-label for="email" :value="__('Email')" />
            <div class="relative text-gray-700">
                <x-input id="email" class="h-10 pl-8 pr-3 block mt-1 w-full focus:ring focus:ring-mr-500 focus:ring-opacity-50" type="email" name="email" :value="old('email')" placeholder="" required autofocus />
                <div class="absolute inset-y-0 left-0 flex items-center px-2 pointer-events-none">
                    <x-icons.email class="h-5 w-5" />
                </div>
            </div>
        </div>


        <!-- Password -->
        <div class="mt-4 " x-data="{ show: true }">
            <x-label for="password" :value="__('Password')" />
            <div class="relative text-gray-700">
                <div class="absolute inset-y-0 left-0 flex items-center px-2 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" /></svg>
                </div>
                <input id="password" placeholder="" :type="show ? 'password' : 'text'" class="h-10 pl-8 pr-3 block mt-1 w-full rounded-md bg-gray-200 bg-opacity-50 font-semibold
                              shadow-sm border-0 focus:bg-white
                              focus:ring focus:ring-mr-500 focus:ring-opacity-50" name="password" required >

                <div class="absolute inset-y-0 right-0 flex items-center px-2">
                    <input class="hidden js-password-toggle" id="toggle" type="checkbox"  @click="show = !show" />
                    <label class="font-bold bg-mr-200 bg-opacity-60 hover:bg-mr-300 rounded px-2 py-1 text-sm text-mr-800 cursor-pointer"
                           :class="{'hidden': !show, 'block':show }" for="toggle"><x-icons.eye  class="size-6"></x-icons.eye></label>
                </div>

                <div class="absolute inset-y-0 right-0 flex items-center px-2">
                    <label class="font-bold bg-mr-300 bg-opacity-60 hover:bg-mr-400 rounded px-2 py-1 text-sm text-mr-800 cursor-pointer"
                           :class="{'block': !show, 'hidden':show }" for="toggle"><x-icons.eye_close  class="size-6"></x-icons.eye_close></label>
                </div>

            </div>
        </div>

        <!-- Remember Me -->
        <div class="block mt-5">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-mr-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                <span class="ml-2 text-sm font-bold text-gray-500">{{ __('Recordar mi contraseña') }}</span>
            </label>
        </div>

        <!-- Button Loin -->
        <div class="flex items-center justify-center mt-5 p-2">
            <x-button class="w-full bg-mr-300 text-mr-800 hover:bg-mr-400 hover:text-mr-900 active:bg-mr-600 ring-mr-300">
                {{ __('Iniciar Sesión') }}
            </x-button>
        </div>

        <!-- Forget Password? -->
        <div class="flex items-center justify-center mt-4">
            @if (Route::has('password.request'))
                <a class="flex underline font-semibold text-sm text-mr-600 hover:text-mr-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>
        <!-- Create new account -->
        <div class="flex items-center justify-center mt-4 p-2 ">
            @if (Route::has('register'))
                <a class="w-2/3" href="{{ route('register') }}">
                    <x-button type="button" class="w-full bg-green-200 text-black hover:bg-green-300 ring-mr-300 border-0">
                        {{ __('Crear nueva cuenta') }}
                    </x-button>
                </a>
            @endif
        </div>
    </form>
</x-guest-layout>
