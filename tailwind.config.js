/** @type {import('tailwindcss').Config} */

export default {
    content: [
        "./resources/**/*.{blade.php,vue,js}",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            'primaryColor': '#3CB72B',
            'hoverPrimary': '#40c057',
            'textColor': '#292C2B',
            'text-grey':'#454545',
            'colorBorder': '#4a514e',
            'slate-200':'#B4B4B3',
            'slate-300': '#3C4048',
            'gray-400':'#3C4048',
            'white': '#ffffff',
            'teal':'#3CB72B',
            'teal-dark':'#38E54D',
            'dark':'#272829',
            'grey':'#F6F5F5',
            'border-secondary':'#B5C0D0',
            'pink':'#F7418F',
            'blue': '#31E1F7',
            'white-50':'#F1EFEF',
            'Red': '#f03e3e'
        },
        fontFamily: {
            inter: ['Inter'],
            poppins:['Poppins']
        }
    },
    plugins: [
        require('daisyui')
    ],
}
