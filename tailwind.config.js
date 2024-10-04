import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins','sans-serif', ...defaultTheme.fontFamily.sans],
                // sans: ['Poppins', 'sans-serif'], // Add Poppins as the default font

            },
            colors: {
                'mr-100': '#F7E8EC',  // Very light variation
                'mr-200': '#EFC3CC',  // Light variation
                'mr-300': '#D88A9A',  // Light-medium variation
                'mr-400': '#B8506B',  // Slightly lighter than base
                'mr-500': '#621C32',  // Base color
                'mr-600': '#511627',  // Slightly darker than base
                'mr-700': '#41101F',  // Medium-dark variation
                'mr-800': '#2E0A14',  // Darker variation
                'mr-900': '#1D050B',  // Very dark variation
            },
        },
    },

    plugins: [forms],
};
