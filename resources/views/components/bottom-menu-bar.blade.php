<div class="footer py-16">
    <div class="md:flex mx-auto md:max-w-6xl">

        @php
            // REFACTOR!: move Language directory from Helpers to resources/lang
            // If possible, adjust only this part of code: "App\Helpers\Languages\Index"
                $language = App\Helpers\Languages\BottomMenu::getLanguages();
        @endphp
        <div class="footer-logo-slogan sm:w-full md:w-1/4 lg:px-auto">
            <div class="footer-logo">
                <img src="{{ asset('img/die-werber-logo.png') }}" class="mx-auto h-auto" alt=""/>
            </div>
            <div class="footer-slogan">
                <p class="text-lg font-weight-bolder px-10 sm:px-10" data-en="{{$language['en']['mission']}}"
                   data-de="{{$language['de']['mission']}}">{{$language['de']['mission']}}</p>
            </div>
        </div>

        <div class="sm:w-full md:w-1/4 ml-10 mt-10 md:mt-3 md:ml-0 lg:px-0">
            <h3 class="text-2xl font-semibold" data-en="{{$language['en']['services']}}"
                data-de="{{$language['de']['services']}}">{{$language['de']['services']}}</h3>
            <div class="my-4 menu-service-footer">
                <ul>
                    <li class="mb-2"><a href="{{ route('web-applications') }}" class="font-weight-bolder" data-en="{{$language['en']['web-development']}}"
                                        data-de="{{$language['de']['web-development']}}">{{$language['de']['web-development']}}</a></li>
                    <li class="mb-2"><a href="{{ route('graphics-design') }}" class="font-weight-bolder" data-en="{{$language['en']['graphic-design']}}"
                                        data-de="{{$language['de']['graphic-design']}}">{{$language['de']['graphic-design']}}</a></li>
                    <li class="mb-2"><a href="{{ route('video-3d') }}" class="font-weight-bolder" data-en="{{$language['en']['animation-video']}}"
                                        data-de="{{$language['de']['animation-video']}}">{{$language['de']['animation-video']}}</a></li>
                    <li class="mb-2"><a href="{{ route('email-medium') }}" class="font-weight-bolder" data-en="{{$language['en']['email-marketing']}}"
                                        data-de="{{$language['de']['email-marketing']}}">{{$language['de']['email-marketing']}}</a></li>
                    <li class="mb-2"><a href="{{ route('logo-logo') }}" class="font-weight-bolder" data-en="{{$language['en']['logo-design']}}"
                                        data-de="{{$language['de']['logo-design']}}">{{$language['de']['logo-design']}}</a></li>
                    <li class="mb-2"><a href="{{ route('bus') }}" class="font-weight-bolder" data-en="{{$language['en']['bus-wrapping']}}"
                                        data-de="{{$language['de']['bus-wrapping']}}">{{$language['de']['bus-wrapping']}}</a></li>
                </ul>
            </div>
        </div>

        <div class="sm:w-full md:w-1/4 ml-10 mt-10 md:mt-3 md:ml-0 lg:px-0">
            <h3 class="text-2xl font-semibold" data-en="{{$language['en']['company']}}"
                data-de="{{$language['de']['company']}}">{{$language['de']['company']}}</h3>
            <div class="menu-company-footer my-4 ">
                <ul>
                    <li class="mb-2"><a href="{{ route('about') }}" class="font-weight-bolder" data-en="{{$language['en']['about']}}"
                                        data-de="{{$language['de']['about']}}">{{$language['de']['about']}}</a></li>
                    <li class="mb-2"><a href="{{ route('team') }}" class="font-weight-bolder" data-en="{{$language['en']['team']}}"
                                        data-de="{{$language['de']['team']}}">{{$language['de']['team']}}</a></li>
                    <li class="mb-2"><a href="{{ route('questions') }}" class="font-weight-bolder" data-en="{{$language['en']['faq']}}"
                                        data-de="{{$language['de']['faq']}}">{{$language['de']['faq']}}</a></li>
                    <li class="mb-2"><a href="{{ route('privacy') }}" class="font-weight-bolder" data-en="{{$language['en']['privacy']}}"
                                        data-de="{{$language['de']['privacy']}}">{{$language['de']['privacy']}}</a></li>
                </ul>
            </div>
        </div>

        <div class="company-info-newsletter sm:w-full md:w-1/6 ml-10 mt-10 md:mt-3 md:ml-0 lg:px-0">
            <h3 class="text-2xl font-semibold" data-en="{{$language['en']['newsletter']}}"
                data-de="{{$language['de']['newsletter']}}">{{$language['de']['newsletter']}}</h3>
            <div class="newsletter-subscription mt-4">
                <p class="font-weight-bolder" data-en="{{$language['en']['newsletter-text']}}"
                   data-de="{{$language['de']['newsletter-text']}}">{{$language['de']['newsletter-text']}}</p>
                <input formControlName="email" type="text" class="mt-4">
            </div>
        </div>
    </div>
</div>
