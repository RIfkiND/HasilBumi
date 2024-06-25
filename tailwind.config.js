import form from "@tailwindcss/forms";
const plugin = require('tailwindcss/plugin');

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.{blade.php,vue,js}",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.vue",
        "./resources/js/**/*.js",
    ],
    darkMode: 'class', // or 'media' or 'class'
    theme: {
        extend: {
            zIndex: {
                "-1": "-1",
            },
            flexGrow: {
                5: "5",
            },
            maxHeight: {
                "screen-menu": "calc(100vh - 3.5rem)",
                modal: "calc(100vh - 160px)",
            },
            transitionProperty: {
                position: "right, left, top, bottom, margin, padding",
                textColor: "color",
            },
            keyframes: {
                "fade-out": {
                    from: { opacity: 1 },
                    to: { opacity: 0 },
                },
                "fade-in": {
                    from: { opacity: 0 },
                    to: { opacity: 1 },
                },
            },
            animation: {
                "fade-out": "fade-out 250ms ease-in-out",
                "fade-in": "fade-in 250ms ease-in-out",
            },
        },
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
        asideScrollbars: {
            light: "light",
            gray: "gray",
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
    plugins: [
        require("daisyui"),
        require("@tailwindcss/forms"),
        plugin(function ({ matchUtilities, theme }) {
            matchUtilities(
                {
                    "aside-scrollbars": (value) => {
                        const track = value === "light" ? "100" : "900";
                        const thumb = value === "light" ? "300" : "600";
                        const color = value === "light" ? "gray" : value;

                        return {
                            scrollbarWidth: "thin",
                            scrollbarColor: `${theme(`colors.${color}.${thumb}`)} ${theme(
                                `colors.${color}.${track}`
                            )}`,
                            "&::-webkit-scrollbar": {
                                width: "8px",
                                height: "8px",
                            },
                            "&::-webkit-scrollbar-track": {
                                backgroundColor: theme(`colors.${color}.${track}`),
                            },
                            "&::-webkit-scrollbar-thumb": {
                                borderRadius: "0.25rem",
                                backgroundColor: theme(`colors.${color}.${thumb}`),
                            },
                        };
                    },
                },
                { values: theme("asideScrollbars") }
            );
        }),
    ],
};
