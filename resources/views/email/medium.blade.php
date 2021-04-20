@extends('layouts.app')

@section('content')

    <section class="wide-silver-section bg-gray-100">
        <div class="mx-auto max-w-6xl flex-col md:flex-row py-8">
            <div class="flex justify-center py-4 wide-section-text">
                <h1 class="text-5xl text-center font-bold leading-snug text-titleRed">
                    Customize <span class="text-titleBlack"> your content to<br> customize</span>  your clients' <br>
                    preferences
                </h1>
            </div>
            <div class="flex justify-center mb-8 ">
                <span class="line-under-section-title mb-10"></span>
            </div>
        </div>
    </section>

    <section class="mt-28">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Let your audience know what you do…</p>
                <p class="text-base custom-black-paragraph">Getting the right message to the right audience is not easy, and there is no such thing as a perfect email but authentic and relevant messages definitely work. Provide your audience with a preview of your content, make them the hero of your story, and let them sign up for your brand, not for your email.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/email-medium-info.png')}}" alt="email-medium-info"/>
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
                <img src="{{asset('img/general-mission-section.png')}}" class=""  alt="company-mission"/>
            </div>
        </div>
    </section>

    <section class="mt-28">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/email-medium-package.png')}}" alt="email-medium-package"/>
                </div>
            </div>
            <div class="flex-1 ml-10 mt-10 md:mt-0">
                <p class="custom-red text-3xl font-bold mb-5">Medium</p>
                <span class="line-under-section-title mb-10"></span>
                <p class="text-base custom-black-paragraph pr-5">Let us help you write your content and place it in our layout with your logo. After we send it to your clients, the statistical analysis will be available to you within ten working days. You will know exactly what your clients like or dislike and you can keep improving your campaigns until you perfect them.</p>
            </div>
        </div>
    </section>

@endsection
