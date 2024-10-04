@props(['title', 'route' => ''])
<li>
    <button type="button" wire:click="routeVisited('{{$title}}','{{$route}}')"
            class="px-4 py-2 flex w-full items-start hover:bg-gray-100 no-underline hover:no-underline transition-colors duration-100 cursor-pointer">
        <span class="flex-1 text-left">{{ $title }}</span>
        <span class="ml-2"><x-icons.cursor_arrow_volt class="size-5"></x-icons.cursor_arrow_volt></span>
    </button>
</li>
