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
            'hoverPrimary': '#40c057',
            'textColor': '#292C2B',
            'text-grey':'#454545',
            'colorBorder': '#4a514e',
            'white': '#ffffff',
            'teal':'#3CB72B',
            'teal-dark':'#38E54D',
            'dark':'#000000',
            'grey':'#EEEDEB',
            'border-secondary':'#B5C0D0'

        },
        fonts: {

        }
    },
    plugins: [require('daisyui')],
}
