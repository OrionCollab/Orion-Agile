/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.{vue,js,ts,jsx,tsx}',
    ],
    theme: {
        extend: {
            fontSize: {
                md: ['1rem', { lineHeight: '1.5rem' }],
            },

            colors: {
                primary: '#0078d4',
            },
            screens: {
                xxs: '360px',
                xs: '475px',
            },
        },
    },
    plugins: [require('tailwindcss-animate')],
};
