<div>
    @section('section-title-header')
        {{ __($title) }}
    @endsection

    <div class="flex text-center justify-center items-center">
        <h1 class="flex text-2xl bg-amber-100">CANCELACIONES</h1>
    </div>

    <br><br><br>

    @if (session()->has('success'))
        <div class="bg-green-200 text-green-800 p-4 mb-4">
            {{ session('success') }}
        </div>
    @endif



    <div class="flex text-center justify-center items-center">
        <form wire:submit.prevent="submit" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" wire:model.live.debounce="name" id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                @error('name') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input type="email" wire:model.live.debounce="email" id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                @error('email') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Mensaje</label>
                <textarea wire:model.live.debounce="message" id="message" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
                @error('message') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>

            <div>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Enviar</button>
            </div>
        </form>
    </div>
</div>
