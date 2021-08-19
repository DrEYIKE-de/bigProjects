const defaultTheme = require("tailwindcss/defaultTheme");
const colors = require("tailwindcss/colors");
module.exports = {
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            colors: {
                "gray-background": "#f7f8fc",
                "teal-background": "#007c74",
                transparent: "transparent",
                current: "currentColor",

                black: colors.black,
                white: colors.white,
                gray: colors.trueGray,
            },
            spacing: {
                70: "17.5rem",
                175: "43.75rem",
            },
            fontFamily: {
                sans: ["OpenSans", ...defaultTheme.fontFamily.sans],
            },
            fontSize: {
                xxs: ["0.625rem", { lineHeight: "1rem" }],
            },
        },
    },

    variants: {
        extend: {
            opacity: ["disabled"],
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/line-clamp"),
    ],
};
