<?php

use Livewire\Volt\Component;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\RedirectResponse as RedirectResponse;

new class extends Component {
    public array $history = [];

    public function mount() :void
    {
        //Session::flush();
        $this->history = Session::get('navigation_history', []);
    }

    public function FlushSession()
    {
        Session::flush();
        return redirect()->route('dashboard');
    }
}; ?>

<div>
    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('dashboard') }}">
                            <x-application-logo class="block h-16 w-auto fill-current text-gray-800" />
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        @foreach ($history as $route)
                            <x-nav-link :href="route($route['url'])" :active="request()->routeIs($route['url'])">
                                {{ __($route['title']) }}
                            </x-nav-link>
                        @endforeach
                        @if(request()->routeIs('reglamentos.*'))
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('reglamentos.principal')">
                                {{ __('hola') }}
                            </x-nav-link>
                        @endif
                    </div>
                </div>

                <!-- MY PROFILE  -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
{{--                    trash button--}}
                    <div class="flex items-center justify-center  p-2 mr-1 rounded-md bg-white text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" >
                        <button type="button" wire:click="FlushSession()" class=" ">
                            <x-icons.trash class="size-5"></x-icons.trash>
                        </button>
                    </div>
{{--                    <button type="button" wire:click="FlushSession()" class="inline-flex items-center shadow p-2 rounded-md bg-white text-gray-500 mx-1 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">--}}
{{--                        <x-icons.trash class="size-4"></x-icons.trash> </button>--}}

{{--                    ID EJERCICIO --}}
                    <x-drop_size id="brand" align="left" width="20" class="bg-white text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100">
                        <x-slot name="trigger">{{$this->brand ?? '2024'}}</x-slot>
                        <x-slot name="content">
                            <x-drop_option > {{ __('2023') }}</x-drop_option>
                            <x-drop_option > {{ __('2022') }}</x-drop_option>
                            <x-drop_option > {{ __('2021') }}</x-drop_option>
                            <x-drop_option > {{ __('2020') }}</x-drop_option>
                        </x-slot>
                    </x-drop_size>
{{--                    USERNAME DROP--}}
                    <x-dropdown align="right" width="48" >
                        <x-slot name="trigger">
                            <button class="inline-flex items-center p-2 text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <x-icons.arrow_down  class="fill-current h-4 w-4"></x-icons.arrow_down>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>

                <!-- Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                               onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</div>
