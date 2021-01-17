const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors')

module.exports = {
    darkMode: 'class',
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
            green: colors.green,
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
            punch: {
                '50': '#fcf9f4',
                '100': '#faf2ea',
                '200': '#f2dfca',
                '300': '#eacca9',
                '400': '#daa669',
                '500': '#ca8029',
                '600': '#b67325',
                '700': '#98601f',
                '800': '#794d19',
                '900': '#633f14'
            }
        }
    },

    variants: {
        extend: {
            borderWidth: ['hover', 'focus'],
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
