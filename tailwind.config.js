/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./root/**/*.{php,html,js}", "./include/**/*.php"],
    theme: {
        // fontFamily: {
        // 	sans: ["Josefin Sans", "Fira Sans", "sans-serif"],
        // 	serif: [],
        // },
        extend: {
            colors: {
                dthb: {
                    1: "#b3b43e",
                    2: "#d7d6d5",
                    3: "#339db4",
                },
            },
        },
    },
    plugins: [],
};
