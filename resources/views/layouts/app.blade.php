<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

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
                <a class="text-dark font-bold hover:text-red text-lg w-full no-underline sm:w-auto sm:pr-4 py-2 sm:py-1 sm:pt-2" href="{{ route('index') }}">Home</a>
                <a class="text-dark font-bold hover:text-red text-lg w-full no-underline sm:w-auto sm:px-4 py-2 sm:py-1 sm:pt-2" href="{{ route('about') }}">About</a>
                <a class="text-dark font-bold hover:text-red text-lg w-full no-underline sm:w-auto sm:px-4 py-2 sm:py-1 sm:pt-2" href="{{ route('merchandising') }}">Merchandising</a>
                <a class="text-dark font-bold hover:text-red text-lg w-full no-underline sm:w-auto sm:px-4 py-2 sm:py-1 sm:pt-2" href="#">Services</a>
                <a class="text-dark font-bold hover:text-red text-lg w-full no-underline sm:w-auto sm:px-4 py-2 sm:py-1 sm:pt-2" href="{{ route('portfolio') }}">Portfolio</a>
                <a class="text-dark font-bold hover:text-red text-lg w-full no-underline sm:w-auto sm:px-4 py-2 sm:py-1 sm:pt-2" href="#">Shops</a>
                <a class="text-dark font-bold hover:text-red text-lg w-full no-underline sm:w-auto sm:px-4 py-2 sm:py-1 sm:pt-2" href="{{ route('contact') }}">Contact</a>
            </div>
        </nav>
    </header>

    <main id="app">
        @yield('content')

        <div class="flex flex-col w-2/3 mx-auto mb-24 tracking-wide">
            <a href="#top" id="bottom" class="inline-block max-w-xs self-center text-center text-red-900 hover:text-white no-underline border rounded-full border-red-900 hover:border-red-900 hover:bg-red-900 px-12 py-2">Go to Top</a>
        </div>
    </main>




    <footer class="footer py-12">
        <div class="flex mx-12">
            <div class="px-4">
                <div class="company-logo-footer">
                    <img src="http://die-werber.test/img/dwlogo.png" />
                </div>
                <div class="company-info-footer">
                    <p> We provide our clients with the<br>best and most reliable PR,<br> Marketing and IT solutions in<br> Switzerland. </p>
                </div>
            </div>
            <div class="px-4">
                <h3 class="text-2xl font-semibold"> Our Services </h3>
                <div class="my-4 menu-service-footer">
                    <ul>
                        <li><a href="{{ route('web-applications') }}" class="font-weight-bolder">Web Development</a></li>
                        <li><a href="{{ route('graphics-design') }}" class="font-weight-bolder">Graphic design</a></li>
                        <li><a href="{{ route('video-3d') }}" class="font-weight-bolder">Animation video</a></li>
                        <li><a href="{{ route('email-medium') }}" class="font-weight-bolder">E-mail marketing</a></li>
                        <li><a href="{{ route('logo-logo') }}" class="font-weight-bolder">Logo</a></li>
                        <li><a href="{{ route('bus') }}" class="font-weight-bolder">Bus wrapping</a></li>
                    </ul>
                </div>
            </div>
            <div class="px-4">
                <h3 class="text-2xl font-semibold"> Our Company </h3>
                <div class="my-4 menu-company-footer">
                    <ul>
                        <li><a href="{{ route('about') }}">About us</a></li>
                        <li><a href="{{ route('team') }}">Our Team</a></li>
                        <li><a href="{{ route('questions') }}">FAQ</a></li>
                        <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="px-4">
                <h3 class="text-2xl font-semibold"> Newsletter </h3>
                <div class="company-info-footer mt-4">
                    <p> Enter the E-mail below for getting<br> updates, promotions, and product<br> launches. </p>
                    <input formControlName="email" type="text" class="mt-4">
                </div>
            </div>
        </div>
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
