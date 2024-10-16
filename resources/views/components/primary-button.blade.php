<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-mr-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-mr-700 focus:bg-gray-700 active:bg-mr-900 focus:outline-none focus:ring-2 focus:ring-mr-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
