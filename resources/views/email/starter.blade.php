@extends('layouts.app')

@section('content')
    <section class="mt-28">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Wrap your messages in a colorful email paper…</p>
                <p class="text-base custom-black-paragraph">E-mail has the potential that other channels do not. A selected list of clients who want exactly what you are offering is better than a big list of random addresses. Let us help you pack your content into unique layouts with your logo and send it to your list of selected clients.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/email-starter-info.png')}}"alt="email-starter-info"/>
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
                    <img src="{{asset('img/email-starter-package.png')}}"/>
                </div>
            </div>
            <div class="flex-1 ml-10 mt-10 md:mt-0">
                <p class="custom-red text-3xl font-bold mb-5">Starter</p>
                <span class="line-under-section-title mb-10"></span>
                <p class="text-base custom-black-paragraph pr-5">We place your content in our layout, add your logo and send it to the clients by your choice. The statistical analysis will be available to you within ten working days. It will provide you with a better insight into what your clients like or dislike and you can keep modifying your campaigns until you perfect your advertising model.</p>
            </div>
        </div>
    </section>




@endsection
