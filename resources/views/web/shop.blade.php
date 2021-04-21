@extends('layouts.app')

@section('content')

    <section class="wide-silver-section bg-gray-100 pt-16 md:pt-0 md:mt-5">
        <div class="mx-auto max-w-6xl flex-col md:flex-row py-8">
            <div class="flex justify-center py-4 wide-section-text">
                <p class="text-5xl text-center font-bold leading-snug text-titleRed px-2 md:px-0 md:w-1/2"">
                    Open <span class="text-titleBlack"> your </span> web shop <span class="text-titleBlack">
                    to open the</span> the door to new opportunities
                </p>
            </div>
            <div class="flex justify-center mb-8 ">
                <span class="line-under-section-title mb-10"></span>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Two billion buyers are just one click away from you!</p>
                <p class="text-base custom-black-paragraph">A number of online buyers seem to be ginormous and it will certainly continue to grow. Majority of social media users start their purchases or buy products via social networks. This can be your opportunity to expand your client basis and sell in quantities as never before. Your potential clients are just a click away from you. Before you allow yourself to doubt it, test it…</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/web-shop-info.png')}}" alt="web-shop-info"/>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-28 wide-silver-section mission-section">
        <div class="mx-auto max-w-6xl flex-col md:flex-row py-8">
            <div class="flex justify-center py-4 mb-8 wide-section-text">
                <p class="text-3xl text-center font-light leading-snug px-2">We provide our clients with the best and most reliable PR, Marketing and IT solutions in Switzerland </p>
            </div>
            <div class="img-holder">
                <img src="{{asset('img/general-mission-section.png')}}" alt="company-mission" />
            </div>
        </div>
    </section>

    <section class="mt-28">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/web-shop-package.png')}}" alt="web-shop-package"/>
                </div>
            </div>
            <div class="flex-1 ml-10 mt-10 md:mt-0">
                <p class="custom-red text-3xl font-bold mb-5">Web shop</p>
                <span class="line-under-section-title mb-10"></span>
                <p class="text-base custom-black-paragraph pr-5">Whether you want to sell online, in your store, or out of the comfort of your home, we will provide you with the best and most attractive solution. Tell us what you sell, your favorite colors and shapes, and we will create the most creative web shop that offers unparalleled services for the most discerning clients.</p>
            </div>
        </div>
    </section>

@endsection
