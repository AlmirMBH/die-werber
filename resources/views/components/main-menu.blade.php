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
        <div class="relative block p-4 lg:p-6 text-xl text-blue-600 font-bold">Logo</div>
      <button class="inline-block md:hidden w-8 h-8 bg-gray-200 text-gray-600 p-1">
        <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
    <ul class="flex">

      <!--Regular Link-->
      <li class="hover:bg-blue-800 hover:text-white">
        <a href="{{route('index')}}" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Home</a>
      </li>

        <!--Hoverable Link-->
        <li class="hoverable-company">
            <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold">Company</a>
            <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
                <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                    <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                        <li>
                            <a href="{{route('about')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">About Us</a>
                        </li>
                    </ul>
                    <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                        <li>
                            <a href="{{route('team')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Our Team</a>
                        </li>
                    </ul>
                    <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                        <li>
                            <a href="{{route('questions')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">FAQ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </li>

      <!--Hoverable Link-->
      <li class="hoverable-services">
        <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold">Services</a>
        <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
          <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-normal text-xl text-black text-bold mb-2">Web development</h3>
                    <li>
                      <a href="{{route('web-applications')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Applications</a>
                    </li>
                    <li>
                      <a href="{{route('web-design')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Design</a>
                    </li>
                    <li>
                      <a href="{{route('web-shop')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Shop</a>
                    </li>
                    <li>
                      <a href="{{route('web-hosting')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Hosting</a>
                    </li>
                    <li>
                      <a href="{{route('web-analysis')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Website Analysis</a>
                    </li>
                    <li>
                      <a href="{{route('web-prices')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Price List</a>
                    </li>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-normal text-xl text-black text-bold mb-2">Graphic Design</h3>
                    <li>
                      <a href="{{route('graphics-design')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Graphic Design</a>
                    </li>
                    <li>
                      <a href="{{route('graphics-print')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Print Materials</a>
                    </li>
                    <li>
                      <a href="{{route('graphics-illustrations')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Illustrations</a>
                    </li>
                    <li>
                      <a href="{{route('graphics-3d')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">3D Modelling</a>
                    </li>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-normal text-xl text-black text-bold mb-2">Animation Video</h3>
                    <li>
                      <a href="{{route('video-voice')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Voice Samples</a>
                    </li>
                    <li>
                      <a href="{{route('video-2d')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">2D Animations</a>
                    </li>
                    <li>
                      <a href="{{route('video-3d')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">3D Animations</a>
                    </li>
                    <li>
                      <a href="{{route('video-whiteboard')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Whiteboard Drawing</a>
                    </li>
                    <li>
                      <a href="{{route('video-prices')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Price List</a>
                    </li>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-normal text-xl text-black text-bold mb-2">Email Marketing</h3>
                    <li>
                      <a href="{{route('email-starter')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Starter</a>
                    </li>
                    <li>
                      <a href="{{route('email-medium')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Medium</a>
                    </li>
                    <li>
                      <a href="{{route('email-advanced')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Advanced</a>
                    </li>
                    <li>
                      <a href="{{route('email-special')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Special</a>
                    </li>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-normal text-xl text-black text-bold mb-2">Logo Design</h3>
                    <li>
                      <a href="{{route('logo-logo')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Logo Design</a>
                    </li>
                    <li>
                      <a href="{{route('logo-3d')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">3D Logo</a>
                    </li>
                    <li>
                      <a href="{{route('logo-animation')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Logo Animation</a>
                    </li>
                    <li>
                      <a href="{{route('logo-brand')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Visual Identity</a>
                    </li>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-normal text-xl text-black text-bold mb-2">Bus wrapping</h3>
                    <li>
                      <a href="{{route('bus')}}" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Price List</a>
                    </li>
                  </ul>
          </div>
        </div>
      </li>

      <!--Regular Link-->
      <li class="hover:bg-blue-800 hover:text-white">
        <a href="{{route('portfolio')}}" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Portfolio</a>
      </li>

      <!--Hoverable Link-->
      <li class="hoverable-shops">
        <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold">Shops</a>
        <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
          <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
              <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                <li>
                  <a href="https://schutzmasken.die-werber.ch" rel=”nofollow” target="_blank" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Schutzmasken</a>
                </li>
              </ul>
              <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                <li>
                  <a href="https://die-werber.ch/wp-content/uploads/2021/04/Katalog-2021.pdf" rel=”nofollow” target="_blank" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Merchandising</a>
                </li>
              </ul>
          </div>
        </div>
      </li>

      <!--Regular Link-->
      <li class="hover:bg-blue-800 hover:text-white">
        <a href="{{route('contact')}}" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Contact</a>
      </li>
        </ul>
      </div>
    </nav>
  </body>
</html>
