/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                dark: "#1B1B1B",
                primary: "#FFB601",
                grade: "#A1A1A1",
            },
        },
    },
    plugins: [],
};
