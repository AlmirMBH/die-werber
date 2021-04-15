<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        /* custom non-Tailwind CSS */

        @media (max-width: 576px) {
            .content {
                padding-top: 51px;
            }
        }

        @media (min-width: 577px) {
            .pt-scroll {
                padding-top: 51px;
            }

            .nav-sticky {
                position: fixed!important;
                min-width: 100%;
                top: 0;
                box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .1);
                transition: all .25s ease-in;
                z-index: 1;
            }
        }

        /* HAMBURGER MENU */

        .hamburger {
            cursor: pointer;
            width: 48px;
            height: 48px;
            transition: all 0.25s;
        }

        .hamburger__top-bun,
        .hamburger__bottom-bun {
            content: '';
            position: absolute;
            width: 24px;
            height: 2px;
            background: #000;
            transform: rotate(0);
            transition: all 0.5s;
        }

        .hamburger:hover [class*="-bun"] {
            background: #333;
        }

        .hamburger__top-bun {
            transform: translateY(-5px);
        }

        .hamburger__bottom-bun {
            transform: translateY(3px);
        }

        .open {
            transform: rotate(90deg);
            transform: translateY(-1px);
        }

        .open .hamburger__top-bun {
            transform:
                rotate(45deg)
                translateY(0px);
        }

        .open .hamburger__bottom-bun {
            transform:
                rotate(-45deg)
                translateY(0px);
        }
    </style>
    <title>Home</title>
</head>
<body class="">
    <header id="top" class="w-full flex flex-col fixed sm:relative bg-white pin-t pin-r pin-l">
        <nav id="site-menu" class="flex flex-col sm:flex-row w-full justify-between items-center px-4 sm:px-6 py-1 bg-white shadow sm:shadow-none border-t-4 border-red-900">
            <div class="w-full sm:w-auto self-start sm:self-center flex flex-row sm:flex-none flex-no-wrap justify-between items-center">
                <a href="#" class="no-underline py-1"><h1 class="font-bold text-lg tracking-widest"></h1></a>
                <img src="{{asset('img/dwlogo.png')}}" alt="DW" class="h-12 ">
                <button id="menuBtn" class="hamburger block sm:hidden focus:outline-none" type="button" onclick="navToggle();">
                    <span class="hamburger__top-bun"></span><span class="hamburger__bottom-bun"></span>
                </button>
            </div>
            <div id="menu" class="w-full sm:w-auto self-end sm:self-center sm:flex flex-col sm:flex-row items-center h-full py-1 pb-4 sm:py-0 sm:pb-0 hidden">
                <a class="text-dark font-bold hover:text-red text-lg w-full no-underline sm:w-auto sm:pr-4 py-2 sm:py-1 sm:pt-2" href="https://ttntm.me/blog/tailwind-responsive-menu/" target="_blank">About</a>
                <a class="text-dark font-bold hover:text-red text-lg w-full no-underline sm:w-auto sm:px-4 py-2 sm:py-1 sm:pt-2" href="#bottom">Features</a>
            </div>
        </nav>
    </header>




    <main id="app">
        @yield('content')

        <div class="flex flex-col w-2/3 mx-auto mb-24 tracking-wide">
            <a href="#top" id="bottom" class="inline-block max-w-xs self-center text-center text-red-900 hover:text-white no-underline border rounded-full border-red-900 hover:border-red-900 hover:bg-red-900 px-12 py-2">Go to Top</a>
        </div>
    </main>




    <footer>

    </footer>




</body>
</html>
<script>
    var nav = document.getElementById('site-menu');
    var header = document.getElementById('top');

    window.addEventListener('scroll', function() {
        if (window.scrollY >=400) { // adjust this value based on site structure and header image height
            nav.classList.add('nav-sticky');
            header.classList.add('pt-scroll');
        } else {
            nav.classList.remove('nav-sticky');
            header.classList.remove('pt-scroll');
        }
    });

    function navToggle() {
        var btn = document.getElementById('menuBtn');
        var nav = document.getElementById('menu');

        btn.classList.toggle('open');
        nav.classList.toggle('flex');
        nav.classList.toggle('hidden');
    }
</script>
