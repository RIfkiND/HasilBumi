import form from "@tailwindcss/forms";
/** @type {import('tailwindcss').Config} */

export default {
    content: [
        "./resources/**/*.{blade.php,vue,js}",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
    ],
    theme: {
        extend: {},
        colors: {
            primaryColor: "#3CB72B",
            hoverPrimary: "#40c057",
            textColor: "#292C2B",
            "text-grey": "#454545",
            colorBorder: "#4a514e",
            "slate-200": "#B4B4B3",
            "slate-300": "#3C4048",
            "gray-400": "#3C4048",
            white: "#ffffff",
            teal: "#3CB72B",
            "teal-dark": "#38E54D",
            dark: "#272829",
            grey: "#F6F5F5",
            "border-secondary": "#B5C0D0",
            "white-50": "#F1EFEF",
            "merah-1": "#ffe3e3",
            "merah-2": "#fa5252",
            "merah-3": "#ffa8a8",
            "hijau-1": "#d3f9d8",
            "hijau-3": "#8ce99a",

        },
        fontFamily: {
            inter: ["Inter"],
            poppins: ["Poppins"],
        },
    },
    daisyui: {
        themes: [
            {
                mytheme: {
                    primary: "#40c057",
                    error: "#F9989F",
                },
            },
        ],
    },
    plugins: [require("daisyui"), require("@tailwindcss/forms")],
};
