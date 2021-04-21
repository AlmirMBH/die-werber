@extends('layouts.app')

@section('content')

    <section class="wide-silver-section bg-gray-100 pt-16 md:pt-0 md:mt-5">
        <div class="mx-auto max-w-6xl flex-col md:flex-row py-8">
            <div class="flex justify-center py-4 wide-section-text">
                <p class="text-5xl text-center font-bold leading-snug text-titleRed mx-2 md:mx-0 md:w-1/2">
                    Animate <span class="text-titleBlack"> your </span> logo <span class="text-titleBlack">
                    to engage </span> your audience
                </p>
            </div>
            <div class="flex justify-center mb-8">
                <span class="line-under-section-title mb-10"></span>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Move, move, move...</p>
                <p class="text-base custom-black-paragraph">They say that in order to succeed in the business world you need to keep doing only three things – move, move, move! If you are already moving and networking that is awesome but let your logo move as well. If you are not happy with the pace of your movements start with your logo. Let it move! Let it inspire you to move!</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/logo-animation-info.gif')}}" alt="logo-animation-info"/>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-28 wide-silver-section mission-section">
        <div class="mx-auto max-w-6xl flex-col md:flex-row py-8">
            <div class="flex justify-center py-4 mb-8 wide-section-text">
                <p class="text-3xl text-center font-light leading-snug px-2">We provide our clients with the best and most reliable PR,<br> Marketing and IT solutions in Switzerland </p>
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
                    <img src="{{asset('img/logo-animation-package.png')}}" alt="logo-animation-package"/>
                </div>
            </div>
            <div class="flex-1 ml-10 mt-10 md:mt-0">
                <p class="custom-red text-3xl font-bold mb-5">3D Logo</p>
                <span class="line-under-section-title mb-10"></span>
                <p class="text-base custom-black-paragraph pr-5">Living in a 2D world is no longer the only option for contemporary businesses. Although it might be funny, it is narrow, bordered by pretty strict lines, and somewhat empty. Free your logo and give it another dimension for a better experience of your brand.  It is simple, go 3D and let your brand live outside the 2D box. Your business deserves it.</p>
            </div>
        </div>
    </section>

@endsection
