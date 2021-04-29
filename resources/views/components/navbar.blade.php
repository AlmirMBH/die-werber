<nav id="site-menu" class="flex flex-col sm:flex-row w-full justify-between items-center px-4 py-1 sm:px-6 bg-white shadow sm:shadow-none">
    <div class="w-full sm:w-auto self-start sm:self-center flex flex-row sm:flex-none flex-no-wrap justify-between items-center">
        <div class="ml-10 text-center">
            <img src="{{asset('img/die-werber-logo.png')}}" alt="DW" class="h-14">
        </div>
        <button id="menuBtn" class="hamburger block sm:hidden focus:outline-none" type="button" onclick="navToggle();">
            <span class="hamburger__top-bun"></span><span class="hamburger__bottom-bun"></span>
        </button>
    </div>

    <div id="menu" class=" w-full sm:w-auto self-end sm:self-center sm:flex flex-col sm:flex-row items-center h-full sm:py-0 sm:pb-0 hidden">
        <ul class="menu-items pt-6">
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
