module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        colors: {
            titleBlack: {
                light: '#181818',
                DEFAULT: '#191919',
                dark: '#202020',
            },
            titleRed: {
                light: '#F36377',
                DEFAULT: '#F25266',
                dark: '#F14155',
            }
        },
        extend: {},
        fontFamily: {
            'nunito': ['nunito', 'sans-serif'],
        }
    },
    variants: {
        backgroundColor: ['responsive', 'hover', 'focus', 'active'],
        fontSize: ['responsive', 'hover'],
        extend: {},
    },
    plugins: [],
}
