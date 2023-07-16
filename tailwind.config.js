/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],
    darkMode: 'class',

    theme: {
        extend: {
            spacing: {
                'fluxo': '54rem',
            },
        },
    },

    plugins: [
        require('flowbite/plugin')
    ],
};
