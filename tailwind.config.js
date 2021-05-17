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
                },
                paragraphGray: {
                    light: '#7a7b7b',
                    DEFAULT:'#7a7a7a',
                    dark: '#7a7c7c',
                },
                darkGreen: {
                    light: '#035850',
                    DEFAULT: '#035851',
                    dark: '#035859',
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
