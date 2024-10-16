<div class="block relative col-span-1 divide-y divide-gray-200 rounded-lg bg-white shadow-md" x-data="{ showChildren: false }" @click.away="showChildren = false">
    <a href="#" class="flex items-center h-full leading-10 px-4 rounded cursor-pointer no-underline hover:no-underline transition-colors duration-100 hover:bg-gray-100" @click.prevent="showChildren = !showChildren">

        <span class="absolute top-2 right-2">
            <x-icons.chevron_down class="size-6 text-gray-500"></x-icons.chevron_down>
        </span>

        <div class="flex w-full items-center justify-between space-y-6 p-3">
            {{ $slot }}
        </div>
    </a>

    <div class="bg-white shadow-md rounded border border-gray-300 text-sm absolute top-auto left-0 min-w-full w-56 z-30 mt-1" x-show="showChildren" x-transition:enter="transition ease duration-300 transform" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease duration-300 transform" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-4" style="display: none;">
        {{ $details }}
    </div>
</div>
