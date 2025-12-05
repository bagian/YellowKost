import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                gold: {
                    50: "#fffbe5",
                    100: "#fff6cc",
                    200: "#ffee99",
                    300: "#ffe666",
                    400: "#ffdd33",
                    500: "#ffd500",
                    600: "#ccaa00",
                    700: "#998000",
                    800: "#665500",
                    900: "#332b00",
                    950: "#171717",
                },
            },
        },
    },

    plugins: [forms],
};
