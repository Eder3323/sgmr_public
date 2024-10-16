<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-2 bg-opacity-95
              border border-transparent rounded-md font-bold text-md shadow-md
              tracking-wide focus:outline-none focus:ring transition ease-in-out duration-500']) }}>
    {{ $slot }}
</button>
