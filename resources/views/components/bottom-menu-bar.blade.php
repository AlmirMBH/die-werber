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
