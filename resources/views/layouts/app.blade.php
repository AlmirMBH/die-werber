<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/general.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/aa9bd40b1d.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title>Home</title>
    </head>

<body class="font-nunito">
    <header id="top" class="w-full flex flex-col fixed sm:relative bg-white pin-t pin-r pin-l shadow-lg p-2">
        <nav id="site-menu" class="flex flex-col sm:flex-row w-full justify-between items-center px-4 sm:px-6 py-1 bg-white shadow sm:shadow-none">
            <div class="w-full sm:w-auto self-start sm:self-center flex flex-row sm:flex-none flex-no-wrap justify-between items-center">
                <a href="#" class="no-underline py-1"><h1 class="font-bold text-lg tracking-widest"></h1></a>
                <img src="{{asset('img/die-werber-logo.png')}}" alt="DW" class="h-12 ">
                <button id="menuBtn" class="hamburger block sm:hidden focus:outline-none" type="button" onclick="navToggle();">
                    <span class="hamburger__top-bun"></span><span class="hamburger__bottom-bun"></span>
                </button>
            </div>

                    <div id="menu" class="w-full sm:w-auto self-end sm:self-center sm:flex flex-col sm:flex-row items-center h-full py-1 pb-4 sm:py-0 sm:pb-0 hidden">
                        <ul class="menu-items">
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a href="">Company <span class="arrow arrowDown"></span></a>
                                <ul class="sub">
                                    <li><a href="{{route('about')}}">About</a></li>
                                    <li><a href="{{route('team')}}">Team</a></li>
                                    <li><a href="{{route('questions')}}">FAQ</a></li>
                                </ul>
                            </li>
                            <li><a href="">Services <span class="arrow arrowDown"></span></a>
                                <ul class="sub">
                                    <li><a href="">Web development <span class="arrow arrowRight"></span></a>
                                        <ul class="super-sub">
                                            <li><a href="{{route('web-applications')}}">Web Applications</a></li>
                                            <li><a href="{{route('web-design')}}">Web Design</a></li>
                                            <li><a href="{{route('web-shop')}}">Webshops</a></li>
                                            <li><a href="{{route('web-hosting')}}">Web Hosting</a></li>
                                            <li><a href="{{route('web-analysis')}}">Website Analysis</a></li>
                                            <li><a href="{{route('web-prices')}}">Price List</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Graphic Design <span class="arrow arrowRight"></span></a>
                                        <ul class="super-sub">
                                            <li><a href="{{route('graphics-design')}}">Graphic Design</a></li>
                                            <li><a href="{{route('graphics-print')}}">Print Materials</a></li>
                                            <li><a href="{{route('graphics-illustrations')}}">Illustrations</a></li>
                                            <li><a href="{{route('graphics-3d')}}">3D Modelling</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Animation video <span class="arrow arrowRight"></span></a>
                                        <ul class="super-sub">
                                            <li><a href="{{route('video-voice')}}">Voice Samples</a></li>
                                            <li><a href="{{route('video-2d')}}">2D Animations</a></li>
                                            <li><a href="{{route('video-3d')}}">3D Animation</a></li>
                                            <li><a href="{{route('video-whiteboard')}}">Whiteboard Drawing</a></li>
                                            <li><a href="{{route('video-prices')}}">Price List</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Email Marketing <span class="arrow arrowRight"></span></a>
                                        <ul class="super-sub">
                                            <li><a href="{{route('email-starter')}}">Starter</a></li>
                                            <li><a href="{{route('email-medium')}}">Medium</a></li>
                                            <li><a href="{{route('email-advanced')}}">Advanced</a></li>
                                            <li><a href="{{route('email-special')}}">Special</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Logo <span class="arrow arrowRight"></span></a>
                                        <ul class="super-sub">
                                            <li><a href="{{route('logo-logo')}}">Logo Design</a></li>
                                            <li><a href="{{route('logo-3d')}}">3D Logo</a></li>
                                            <li><a href="{{route('logo-animation')}}">Logo Animation</a></li>
                                            <li><a href="{{route('logo-brand')}}">Visual Identity</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Bus Wrapping <span class="arrow arrowRight"></span></a>
                                        <ul class="super-sub">
                                            <li><a href="{{route('bus')}}">Price List</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                            <li><a href="">Shops</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div>
        </nav>
    </header>

    <main id="app">
        @yield('content')

        <div class="flex flex-col w-2/3 mx-auto mb-24 mt-24 tracking-wide">
            <a href="#top" id="bottom" class="inline-block max-w-xs self-center text-center text-red-900 hover:text-white no-underline border rounded-full border-red-900 hover:border-red-900 hover:bg-red-900 px-12 py-2">Go to Top</a>
        </div>
    </main>

    <div class="footer py-16">
        <div class="md:flex mx-auto md:max-w-6xl">

            <div class="footer-logo-slogan sm:w-full md:w-1/4 lg:px-auto">
                <div class="footer-logo">
                    <img src="{{ asset('img/die-werber-logo.png') }}" class="mx-auto h-auto" alt=""/>
                </div>
                <div class="footer-slogan">
                    <p class="text-lg font-weight-bolder px-10 sm:px-10"> We provide our clients with the best and most reliable PR, Marketing and IT solutions in Switzerland. </p>
                </div>
            </div>

            <div class="sm:w-full md:w-1/4 ml-10 mt-10 md:mt-3 md:ml-0 lg:px-0">
                <h3 class="text-2xl font-semibold"> Our Services </h3>
                <div class="my-4 menu-service-footer">
                    <ul>
                        <li class="mb-2"><a href="{{ route('web-applications') }}" class="font-weight-bolder">Web Development</a></li>
                        <li class="mb-2"><a href="{{ route('graphics-design') }}" class="font-weight-bolder">Graphic design</a></li>
                        <li class="mb-2"><a href="{{ route('video-3d') }}" class="font-weight-bolder">Animation video</a></li>
                        <li class="mb-2"><a href="{{ route('email-medium') }}" class="font-weight-bolder">E-mail marketing</a></li>
                        <li class="mb-2"><a href="{{ route('logo-logo') }}" class="font-weight-bolder">Logo</a></li>
                        <li class="mb-2"><a href="{{ route('bus') }}" class="font-weight-bolder">Bus wrapping</a></li>
                    </ul>
                </div>
            </div>

            <div class="sm:w-full md:w-1/4 ml-10 mt-10 md:mt-3 md:ml-0 lg:px-0">
                <h3 class="text-2xl font-semibold"> Our Company </h3>
                <div class="menu-company-footer my-4 ">
                    <ul>
                        <li class="mb-2"><a href="{{ route('about') }}" class="font-weight-bolder">About us</a></li>
                        <li class="mb-2"><a href="{{ route('team') }}" class="font-weight-bolder">Our Team</a></li>
                        <li class="mb-2"><a href="{{ route('questions') }}" class="font-weight-bolder">FAQ</a></li>
                        <li class="mb-2"><a href="{{ route('privacy') }}" class="font-weight-bolder">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>

            <div class="company-info-newsletter sm:w-full md:w-1/6 ml-10 mt-10 md:mt-3 md:ml-0 lg:px-0">
                <h3 class="text-2xl font-semibold"> Newsletter </h3>
                <div class="newsletter-subscription mt-4">
                    <p class="font-weight-bolder"> Enter the E-mail below for getting updates, promotions, and product launches. </p>
                    <input formControlName="email" type="text" class="mt-4">
                </div>
            </div>

        </div>

    </div>
<footer>
    <div class=" custom-green-dark py-1">
        <div class="custom-green-dark md:flex md:justify-around md:mx-auto md:max-w-7xl py-8">
            <div class="copyright">
                <p class="text-white text-center mb-5 md:text-right md:mr-5 md:pt-2">Copyright 2020, DW Die Werber AG. All Rights Reserved.</p>
            </div>

            <div class="social-media text-center">
                <ul class="inline-flex">
                    <li>
                        <a class="facebook" href="https://www.facebook.com/diewerberpfaffikon/"><i class="fa fa-facebook facebook-icon"></i></a>
                    </li>
                    <li>
                        <a class="linkedin" href="https://ba.linkedin.com/company/die-werber?trk=public_profile_topcard_current_company"><i class="fa fa-linkedin linkedin-icon"></i></a>
                    </li>
                    <li>
                        <a class="instagram" href="https://www.instagram.com/diewerber/"><i class="fa fa-instagram instagram-icon"></i></a>
                    </li>
                </ul>
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
