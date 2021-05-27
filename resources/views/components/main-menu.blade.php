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
        <a href="#" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Normal</a>
      </li>

      <!--Hoverable Link-->
      <li class="hoverable-services">
        <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold">Services</a>
        <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
          <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-normal text-xl text-black text-bold mb-2">Web development</h3>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Application</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Design</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Shop</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Hosting</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Pricing</a>
                    </li>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-normal text-xl text-black text-bold mb-2">Web development</h3>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Application</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Design</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Shop</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Hosting</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Pricing</a>
                    </li>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-normal text-xl text-black text-bold mb-2">Web development</h3>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Application</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Design</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Shop</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Hosting</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Pricing</a>
                    </li>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-normal text-xl text-black text-bold mb-2">Web development</h3>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Application</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Design</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Shop</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Hosting</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Pricing</a>
                    </li>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-normal text-xl text-black text-bold mb-2">Web development</h3>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Application</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Design</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Shop</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Hosting</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Pricing</a>
                    </li>
                  </ul>
                  <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                    <h3 class="font-normal text-xl text-black text-bold mb-2">Web development</h3>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Application</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Design</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Shop</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Hosting</a>
                    </li>
                    <li>
                      <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Pricing</a>
                    </li>
                  </ul>
          </div>
        </div>
      </li>

      <!--Hoverable Link-->
      <li class="hoverable-company">
        <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold">Company</a>
        <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
          <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
              <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                <li>
                  <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Application</a>
                </li>
              </ul>
              <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                <li>
                  <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Application</a>
                </li>
              </ul>
              <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                <li>
                  <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Application</a>
                </li>
              </ul>
          </div>
        </div>
      </li>

      <!--Regular Link-->
      <li class="hover:bg-blue-800 hover:text-white">
        <a href="#" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Portfolio</a>
      </li>

      <!--Hoverable Link-->
      <li class="hoverable-shops">
        <a href="#" class="relative block py-6 px-4 lg:p-6 text-sm lg:text-base font-bold">Shops</a>
        <div class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-white">
          <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
              <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                <li>
                  <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Application</a>
                </li>
              </ul>
              <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                <li>
                  <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Application</a>
                </li>
              </ul>
              <ul class="px-4 w-full sm:w-1/2 lg:w-1/6 pb-6 pt-6 lg:pt-3">
                <li>
                  <a href="#" class="block p-3 hover:bg-green-400 text-black-300 hover:text-white">Web Application</a>
                </li>
              </ul>
          </div>
        </div>
      </li>

      <!--Regular Link-->
      <li class="hover:bg-blue-800 hover:text-white">
        <a href="#" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Contact</a>
      </li>

        </ul>
      </div>
    </nav>
  </body>
</html>
