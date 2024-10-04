<div>
    @section('section-title-header')
        {{ __($title) }}
    @endsection

    <div class="w-full max-w-6xl mx-auto p-6 bg-white shadow-md rounded-md">
        <form wire:submit.prevent="save()" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Owner Name -->
            <div>
                <x-input-label for="owner_name" :value="__('Nombre Propietario')" />
                <x-text-input id="owner_name" class="block mt-1 w-full" type="text" wire:model="owner_name" />
                <x-input-error :messages="$errors->get('owner_name')" class="mt-2" />
            </div>

            <!-- Company Name -->
            <div>
                <x-input-label for="company_name" :value="__('Razón Social')" />
                <x-text-input id="company_name" class="block mt-1 w-full" type="text" wire:model="company_name" />
                <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
            </div>

            <!-- RFC -->
            <div>
                <x-input-label for="rfc" :value="__('RFC')" />
                <x-text-input id="rfc" class="block mt-1 w-full" type="text" wire:model="rfc" />
                <x-input-error :messages="$errors->get('rfc')" class="mt-2" />
            </div>

            <!-- Business Type -->
            <div>
                <x-input-label for="business_type" :value="__('Tipo de Negocio')" />
                <div id="brand_div" class="relative mt-2 rounded-lg w-full">
                    <x-drop_size wire:change.debounce="Change()" id="business_type" align="left" width="full" class="border border-gray-300 focus:border-mr-500 focus:ring-mr-500 ">
                        <x-slot name="trigger">{{$business_type ?? 'Tipo Negocio'}}</x-slot>
                        <x-slot name="content">
                            <x-drop_option wire:click="changeBussines('Propio')" > {{ __('Propio') }}</x-drop_option>
                            <x-drop_option wire:click="changeBussines('No Propio')" > {{ __('No propio') }}</x-drop_option>
                        </x-slot>
                        <x-input-error :messages="$errors->get('business_type')" class="mt-2" />
                    </x-drop_size>
                </div>
                <x-input-error :messages="$errors->get('business_type')" class="mt-2" />
            </div>

            <!-- Street Name -->
            <div>
                <x-input-label for="street_name" :value="__('Nombre Calle')" />
                <x-text-input id="street_name" class="block mt-1 w-full" type="text" wire:model="street_name" />
                <x-input-error :messages="$errors->get('street_name')" class="mt-2" />
            </div>

            <!-- Street Number -->
            <div>
                <x-input-label for="street_number" :value="__('Número')" />
                <x-text-input id="street_number" class="block mt-1 w-full" type="number" wire:model="street_number" />
                <x-input-error :messages="$errors->get('street_number')" class="mt-2" />
            </div>

            <!-- Locality -->
            <div>
                <x-input-label for="locality" :value="__('Localidad')" />
                <x-text-input id="locality" class="block mt-1 w-full" type="text" wire:model="locality" />
                <x-input-error :messages="$errors->get('locality')" class="mt-2" />
            </div>

            <!-- Municipality -->
            <div>
                <x-input-label for="municipality" :value="__('Municipio')" />
                <x-text-input id="municipality" class="block mt-1 w-full" type="text" wire:model="municipality" />
                <x-input-error :messages="$errors->get('municipality')" class="mt-2" />
            </div>

            <!-- Postal Code (CP) -->
            <div>
                <x-input-label for="cp" :value="__('CP')" />
                <x-text-input id="cp" class="block mt-1 w-full" type="number" wire:model="cp" />
                <x-input-error :messages="$errors->get('cp')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <div class="sm:col-span-2 lg:col-span-3 mt-4 flex ">
                <x-primary-button class="w-full sm:w-auto  justify-center">
                    {{ __('Save') }}
                </x-primary-button>
            </div>
        </form>
    </div>

</div>
