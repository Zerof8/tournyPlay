const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#212120',
            }
        },
    },
    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')]
}
