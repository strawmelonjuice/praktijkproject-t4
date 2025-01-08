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
                    1: "#0085CA",
                    2: "#66b6df",
                    3: "#339db4",
                },
            },
        },
    },
    plugins: [],
};
