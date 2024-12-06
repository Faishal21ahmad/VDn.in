import defaultTheme from 'tailwindcss/defaultTheme';
import plugin from 'tailwindcss/plugin';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
          
        },
    },
    plugins: [
        plugin(function ({ addUtilities }) {
            addUtilities({
              '.scrollbar-hide': {
                /* Untuk Chrome, Safari, dan Edge */
                '-webkit-overflow-scrolling': 'touch',
                'scrollbar-width': 'none', /* Firefox */
                '-ms-overflow-style': 'none', /* IE and Edge */
              },
              '.scrollbar-hide::-webkit-scrollbar': {
                display: 'none', /* Chrome, Safari, dan Edge */
              },
            });
        }),
    ],
};
