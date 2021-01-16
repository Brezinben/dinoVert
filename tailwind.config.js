const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                montserrat: ['Montserrat']
            },
        },
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            black: colors.black,
            white: colors.white,
            gray: colors.coolGray,
            red: colors.red,
            yellow: colors.amber,
            blue: colors.blue,
            pink: colors.pink,
            dino: {
                "50": "#778f9c",
                "100": "#6d8592",
                "200": "#637b88",
                "300": "#59717e",
                "400": "#4f6774",
                "500": "#455d6a",
                "600": "#3b5360",
                "700": "#314956",
                "800": "#273f4c",
                "900": "#1d3542"
            },
        }
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
