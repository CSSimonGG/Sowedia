/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                inter: ["Inter", "sans-serif"],
            },
        },
        colors: {
            blue: "#3F00FF",
            orange: "#FF7738",
            yellow: "#FAD732",
            white: "#F8FBFD",
            gray: "#C9C9C9",
            black: "#000000",
        },
        screens: {
            xxs: "320px",
            // => @media (min-width: 320px) { ... }

            xs: "425px",
            // => @media (min-width: 425px) { ... }

            sm: "640px",
            // => @media (min-width: 640px) { ... }

            md: "768px",
            // => @media (min-width: 768px) { ... }

            "2md": "898px",
            // => @media (min-width: px) { ... }

            lg: "1024px",
            // => @media (min-width: 1024px) { ... }

            xl: "1280px",
            // => @media (min-width: 1280px) { ... }

            "2xl": "1344px",
            // => @media (min-width: 1344px) { ... }
        },
    },
    plugins: [],
};
