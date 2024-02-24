{import('tailwindcss').Config}
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        colors: {
            'primaryColor': '#3CB72B',
            'textColor': '#292C2B',
            'colorBorder': '#4a514e',
            'white': '#ffffff',
            'teal':'#3CB72B',
            'teal-dark':'#38E54D',
            'dark':'#000000'
        }
    },
    plugins: [require('daisyui')],
}
