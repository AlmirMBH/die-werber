<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Tailwind CSS Mega Menu</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
  <style>

  /* ––––––––––––––––––––––––––––––––––––––––––––––––––
    Based on: https://codepen.io/nickelse/pen/YGPJQG
    Influenced by: https://sproutsocial.com/
  –––––––––––––––––––––––––––––––––––––––––––––––––– */


  /* #Mega Menu Styles
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
  .mega-menu {
    display: none;
    left: 0;
    position: absolute;
    text-align: left;
    width: 100%;
  }

  /* #hoverable Class Styles
  –––––––––––––––––––––––––––––––––––––––––––––––––– */
  .hoverable-services {
    position: static;
  }

  .hoverable-services > a:after {
    content: "\25BC";
    font-size: 10px;
    padding-left: 6px;
    position: relative;
    top: -1px;
  }
  .hoverable-services:hover .mega-menu {
    display: block;
  }

  .hoverable-company {
    position: static;
  }

  .hoverable-company > a:after {
    content: "\25BC";
    font-size: 10px;
    padding-left: 6px;
    position: relative;
    top: -1px;
  }

  .hoverable-company:hover .mega-menu {
    display: block;
  }

  .hoverable-shops {
    position: static;
  }

  .hoverable-shops > a:after {
    content: "\25BC";
    font-size: 10px;
    padding-left: 6px;
    position: relative;
    top: -1px;
  }

  .hoverable-shops:hover .mega-menu {
    display: block;
  }

  /* #toggle Class Styles
  –––––––––––––––––––––––––––––––––––––––––––––––––– */

  .toggleable > label:after {
    content: "\25BC";
    font-size: 10px;
    padding-left: 6px;
    position: relative;
    top: -1px;
  }

  .toggle-input {
    display: none;
  }
  .toggle-input:not(checked) ~ .mega-menu {
    display: none;
  }

  .toggle-input:checked ~ .mega-menu {
    display: block;
  }

  .toggle-input:checked + label {
    color: white;
    background: #2c5282; /*@apply bg-blue-800 */
  }

  .toggle-input:checked ~ label:after {
    content: "\25B2";
    font-size: 10px;
    padding-left: 6px;
    position: relative;
    top: -1px;
  }

  </style>
</head>
<body class="bg-gray-200 font-sans leading-normal tracking-normal">

<nav class="relative bg-white border-b-2  border-gray-300 text-gray-900">
      <div class="container mx-auto flex justify-between">
        <div class="relative block p-4 lg:p-6 text-xl text-blue-600 font-bold">
            <img src="{{asset('img/die-werber-logo.png')}}" alt="die-werber" class="h-16">
        </div>
      <button class="inline-block md:hidden w-8 h-8 bg-gray-200 text-gray-600 p-1">
        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
          @php
                // REFACTOR!: move Language directory from Helpers to resources/lang
                // If possible, adjust only this part of code: "App\Helpers\Languages\MainMenu"
              $languages = App\Helpers\Languages\MainMenu::getLanguages();
          @endphp
    <ul class="flex">

      <!--Regular Link-->
      <li class="hover:bg-blue-800 hover:text-white">
        <a href="{{route('index')}}" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold" data-en="{{$languages['en']['home']}}" data-de="{{$languages['de']['home']}}">{{$languages['de']['home']}}</a>
      </li>

        <!--Hoverable Link-->
        <li class="hoverable-company">
            <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold" data-en="{{$languages['en']['company']}}" data-de="{{$languages['de']['company']}}">{{$languages['de']['company']}}</a>
            <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                    <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                        <li>
                            <a href="{{route('about')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['about']}}" data-de="{{$languages['de']['about']}}">{{$languages['de']['about']}}</a>
                        </li>
                    </ul>
                    <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                        <li>
                            <a href="{{route('team')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['team']}}" data-de="{{$languages['de']['team']}}">{{$languages['de']['team']}}</a>
                        </li>
                    </ul>
                    <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                        <li>
                            <a href="{{route('questions')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['faq']}}" data-de="{{$languages['de']['faq']}}">{{$languages['de']['faq']}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>

      <!--Hoverable Link-->
      <li class="hoverable-services">
        <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold" data-en="{{$languages['en']['services']}}" data-de="{{$languages['de']['services']}}">{{$languages['de']['services']}}</a>
        <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
          <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-normal text-xl text-black text-bold mb-2" data-en="{{$languages['en']['web-development']}}" data-de="{{$languages['de']['web-development']}}">{{$languages['de']['web-development']}}</h3>
                    <li>
                      <a href="{{route('web-applications')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['web-applications']}}" data-de="{{$languages['de']['web-applications']}}">{{$languages['de']['web-applications']}}</a>
                    </li>
                    <li>
                      <a href="{{route('web-design')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['web-design']}}" data-de="{{$languages['de']['web-design']}}">{{$languages['de']['web-design']}}</a>
                    </li>
                    <li>
                      <a href="{{route('web-shop')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['web-shop']}}" data-de="{{$languages['de']['web-shop']}}">{{$languages['de']['web-shop']}}</a>
                    </li>
                    <li>
                      <a href="{{route('web-hosting')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['web-hosting']}}" data-de="{{$languages['de']['web-hosting']}}">{{$languages['de']['web-hosting']}}</a>
                    </li>
                    <li>
                      <a href="{{route('web-analysis')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['website-analysis']}}" data-de="{{$languages['de']['website-analysis']}}">{{$languages['de']['website-analysis']}}</a>
                    </li>
                    <li>
                      <a href="{{route('web-prices')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['price-list']}}" data-de="{{$languages['de']['price-list']}}">{{$languages['de']['price-list']}}</a>
                    </li>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-normal text-xl text-black text-bold mb-2" data-en="{{$languages['en']['graphic-design']}}" data-de="{{$languages['de']['graphic-design']}}">{{$languages['de']['graphic-design']}}</h3>
                    <li>
                      <a href="{{route('graphics-design')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['graphic-design']}}" data-de="{{$languages['de']['graphic-design']}}">{{$languages['de']['graphic-design']}}</a>
                    </li>
                    <li>
                      <a href="{{route('graphics-print')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['print-materials']}}" data-de="{{$languages['de']['print-materials']}}">{{$languages['de']['print-materials']}}</a>
                    </li>
                    <li>
                      <a href="{{route('graphics-illustrations')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['illustrations']}}" data-de="{{$languages['de']['illustrations']}}">{{$languages['de']['illustrations']}}</a>
                    </li>
                    <li>
                      <a href="{{route('graphics-3d')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['3d-modelling']}}" data-de="{{$languages['de']['3d-modelling']}}">{{$languages['de']['3d-modelling']}}</a>
                    </li>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-normal text-xl text-black text-bold mb-2" data-en="{{$languages['en']['animation-video']}}" data-de="{{$languages['de']['animation-video']}}">{{$languages['de']['animation-video']}}</h3>
                    <li>
                      <a href="{{route('video-voice')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['voice-samples']}}" data-de="{{$languages['de']['voice-samples']}}">{{$languages['de']['voice-samples']}}</a>
                    </li>
                    <li>
                      <a href="{{route('video-2d')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['2d-animations']}}" data-de="{{$languages['de']['2d-animations']}}">{{$languages['de']['2d-animations']}}</a>
                    </li>
                    <li>
                        <a href="{{route('video-3d')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['3d-animations']}}" data-de="{{$languages['de']['3d-animations']}}">{{$languages['de']['3d-animations']}}</a>
                    </li>
                    <li>
                        <a href="{{route('video-whiteboard')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['whiteboard']}}" data-de="{{$languages['de']['whiteboard']}}">{{$languages['de']['whiteboard']}}</a>
                    </li>
                    <li>
                        <a href="{{route('video-prices')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['price-list']}}" data-de="{{$languages['de']['price-list']}}">{{$languages['de']['price-list']}}</a>
                    </li>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-normal text-xl text-black text-bold mb-2" data-en="{{$languages['en']['email']}}" data-de="{{$languages['de']['email']}}">{{$languages['de']['email']}}</h3>
                    <li>
                      <a href="{{route('email-starter')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['starter']}}" data-de="{{$languages['de']['starter']}}">{{$languages['de']['starter']}}</a>
                    </li>
                    <li>
                      <a href="{{route('email-medium')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['medium']}}" data-de="{{$languages['de']['medium']}}">{{$languages['de']['medium']}}</a>
                    </li>
                    <li>
                      <a href="{{route('email-advanced')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['advanced']}}" data-de="{{$languages['de']['advanced']}}">{{$languages['de']['advanced']}}</a>
                    </li>
                    <li>
                      <a href="{{route('email-special')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['special']}}" data-de="{{$languages['de']['special']}}">{{$languages['de']['special']}}</a>
                    </li>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-normal text-xl text-black text-bold mb-2" data-en="{{$languages['en']['logo-design']}}" data-de="{{$languages['de']['logo-design']}}">{{$languages['de']['logo-design']}}</h3>
                    <li>
                      <a href="{{route('logo-logo')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['logo-design']}}" data-de="{{$languages['de']['logo-design']}}">{{$languages['de']['logo-design']}}</a>
                    </li>
                    <li>
                      <a href="{{route('logo-3d')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['3d-logo']}}" data-de="{{$languages['de']['3d-logo']}}">{{$languages['de']['3d-logo']}}</a>
                    </li>
                    <li>
                      <a href="{{route('logo-animation')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['logo-animation']}}" data-de="{{$languages['de']['logo-animation']}}">{{$languages['de']['logo-animation']}}</a>
                    </li>
                    <li>
                      <a href="{{route('logo-brand')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['visual-identity']}}" data-de="{{$languages['de']['visual-identity']}}">{{$languages['de']['visual-identity']}}</a>
                    </li>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-normal text-xl text-black text-bold mb-2" data-en="{{$languages['en']['bus-wrapping']}}" data-de="{{$languages['de']['bus-wrapping']}}">{{$languages['de']['bus-wrapping']}}</h3>
                    <li>
                      <a href="{{route('bus')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['price-list']}}" data-de="{{$languages['de']['price-list']}}">{{$languages['de']['price-list']}}</a>
                    </li>
                  </ul>
          </div>
        </div>
      </li>

      <!--Regular Link-->
      <li class="hover:bg-blue-800 hover:text-white">
        <a href="{{route('portfolio')}}" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold" data-en="{{$languages['en']['portfolio']}}" data-de="{{$languages['de']['portfolio']}}">{{$languages['de']['portfolio']}}</a>
      </li>

      <!--Hoverable Link-->
      <li class="hoverable-shops">
        <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold" data-en="{{$languages['en']['shops']}}" data-de="{{$languages['de']['shops']}}">{{$languages['de']['shops']}}</a>
        <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
          <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
              <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                <li>
                  <a href="https://schutzmasken.die-werber.ch" rel=”nofollow”
                     target="_blank" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white"
                     data-en="{{$languages['en']['masks']}}" data-de="{{$languages['de']['masks']}}">{{$languages['de']['masks']}}</a>
                </li>
              </ul>
              <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                <li>
                  <a href="https://die-werber.ch/wp-content/uploads/2021/04/Katalog-2021.pdf" rel=”nofollow” target="_blank" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white" data-en="{{$languages['en']['merchandising']}}" data-de="{{$languages['de']['merchandising']}}">{{$languages['de']['merchandising']}}</a>
                </li>
              </ul>
          </div>
        </div>
      </li>

      <!--Regular Link-->
      <li class="hover:bg-blue-800 hover:text-white">
        <a href="{{route('contact')}}" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold" data-en="{{$languages['en']['contact']}}" data-de="{{$languages['de']['contact']}}">{{$languages['de']['contact']}}</a>
      </li>
      <li class="hover:bg-blue-800 hover:text-white">
        <p onclick="changeLanguage('de')" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">DE</p>
      </li>
      <li class="hover:bg-blue-800 hover:text-white">
          <p onclick="changeLanguage('en')" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">EN</p>
      </li>
    </ul>
      </div>
    </nav>
  </body>
</html>
