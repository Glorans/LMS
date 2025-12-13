import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.blade.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'nature': {
                    50: '#f1faee',
                    100: '#d8f3dc',
                    200: '#b7e4c7',
                    300: '#95d5b2',
                    400: '#74c69d',
                    500: '#52b788',
                    600: '#40916c',
                    700: '#2d6a4f',
                    800: '#1b4332',
                    900: '#081c15',
                },
            },
        },
    },

    plugins: [forms],
};