/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            screens: {
                "1160px": {
                    max: "1160px",
                },
                "1080px": {
                    max: "1080px",
                },
                "920px": {
                    max: "920px",
                },
                "770px": {
                    max: "770px",
                },
                "650px": {
                    max: "650px",
                },
                "510px": {
                    max: "510px",
                },
                "480px": {
                    max: "480px",
                },
                "400px": {
                    max: "400px",
                },
            },
            colors: {
                dark: "#1B1B1B",
                primary: "#FFB601",
                grade: "#A1A1A1",
            },
        },
    },
    plugins: [],
};
