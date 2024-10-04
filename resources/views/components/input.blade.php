@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge(['class' => 'rounded-lg bg-gray-200 bg-opacity-50 font-semibold
          shadow-sm border-0 focus:bg-white text-gray-600 focus:ring focus:ring-mr-500 focus:ring-opacity-50']) !!}>



