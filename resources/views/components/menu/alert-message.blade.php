<div x-data="{ show: true }" x-show="show" class="p-4 mb-4 relative rounded-md {{ $bgColor }} {{ $textColor }}">

    <button @click="show = false" class="absolute top-0 right-0 mt-2 mr-2">
        <x-icons.close_tag class="h-6 w-6 {{ $textColor }}"></x-icons.close_tag>
    </button>

    {{ $message }}
</div>
