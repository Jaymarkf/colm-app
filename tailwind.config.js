const colors = require("tailwindcss/colors");
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            width: {
                "430px": "430px",
            },
            screens: {
                xs: "425px",
                medium: "500px",
                md2: "876px",
            },
        },
        colors: {
            transparent: "transparent",
            current: "currentColor",
            black: colors.black,
            white: colors.white,
            gray: colors.slate,
            amber:colors.amber,
            lime:colors.lime,
            blue:colors.blue,
            green: colors.emerald,
            purple: colors.violet,
            yellow: colors.amber,
            emerald:colors.emerald,
            sky:colors.sky,
            pink: colors.fuchsia,
            color1: "#CDE990",
            color2: "#AACB73",
            color3: "#FFD4D4",
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
};
