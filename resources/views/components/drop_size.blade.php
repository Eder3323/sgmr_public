@props(['align' => 'left', 'width' => '48', 'contentClasses' => 'py-1 bg-white', 'my_style'=>''])

@php
    switch ($align) {
        case 'left':
            $alignmentClasses = 'origin-top-left left-0';
            break;
        case 'top':
            $alignmentClasses = 'origin-top';
            break;
        case 'right':
        default:
            $alignmentClasses = 'origin-top-right right-0';
            break;
    }

    switch ($width) {
        case '20':
            $width = 'w-20';
            break;
        case '24':
            $width = 'w-24';
            break;
        case '32':
            $width = 'w-32';
            break;
        case '48':
            $width = 'w-48';
            break;
        case 'auto':
            $width = 'w-auto';
        break;
        case 'full':
            $width = 'w-full';
        break;
    }
@endphp

<div {{ $attributes->merge(['class' => 'relative p-2 mr-1 rounded-md transition duration-150 ease-in-out ' . $width]) }} x-data="{ open: false }" @click.away="open = false" @close.stop="open = false">
    <div @click="open = ! open" class="cursor-pointer">
        <button type="button" class="flex items-center text-sm font-medium transition duration-150 ease-in-out">
            <span class="text-sm text-gray-500 flex-shrink flex-grow flex-auto  tracking-wider" >{{ $trigger }}</span>
            <span class="absolute inset-y-0 right-0 flex items-center pr-2">
                <x-icons.arrow_down  class="fill-current h-4 w-4"></x-icons.arrow_down>
            </span>
        </button>
    </div>

    <div x-show="open"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
         class="absolute z-50 mt-2 {{ $width }} rounded-md shadow-lg {{$alignmentClasses}} "
         style="display: none;"
         @click="open = false">
        <div class="rounded-md ring-opacity-5 cursor-default {{ $contentClasses }}">
            {{ $content }}
        </div>
    </div>
</div>
