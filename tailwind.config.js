module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
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
