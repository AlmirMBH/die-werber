module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
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
            fontFamily: {
                'nunito': ['nunito', 'sans-serif'],
            },
            backgroundImage: theme => ({
                'about-background-image': "url('/img/about-background-image.jpg')",
                'contact-section-pages': "url('/img/contact-section-pages.jpg')",
            })
        },
    },
    variants: {
        backgroundColor: ['responsive', 'hover', 'focus', 'active'],
        fontSize: ['responsive', 'hover'],
        extend: {},
    },
    plugins: [],
}
