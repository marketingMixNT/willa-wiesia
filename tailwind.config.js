/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            screens: {
                xs: "390px",
                max: "1921px",
            },

            colors: {
                primary: "#fdf4db",
                secondary: "#2b314f",
                // third: '#E76F51',
                third: "#ed9e5f",
            },
            fontFamily: {
                heading: ["Signika Negative", "sans-serif"],
                text: ["Mukta", "sans-serif"],
            },
            animation: {
                "spin-slow": "spin 15s linear infinite",
            },
        },
    },
    plugins: [],
};
