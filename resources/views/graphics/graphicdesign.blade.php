@extends('layouts.app')

@section('content')

    <section class="mt-20 wide-silver-section bg-gray-100">
        <div class="mx-auto max-w-6xl flex-col md:flex-row py-8">
            <div class="flex justify-center py-4 wide-section-text">
                <h1 class="text-5xl text-center font-bold leading-snug text-titleRed">
                    Design <span class="text-titleBlack"> your </span> content <span class="text-titleBlack"> to  <br> design your </span> business <br> opportunities
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
                <p class="custom-black text-xl font-semibold mb-5">Your graphic content is the most sincere intermediary between you and your client!</p>
                <p class="text-base custom-black-paragraph">As the old saying goes, “Actions speak louder than words”. Let us combine your messages with photos, illustrations and drawings and make them speak louder than your words. Let them leave a memorable impression on your clients. An irresistible impression that turns incorrigible phlegamtics into curios explorers.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/graphic-design-info.png')}}" alt="graphic-design-info"/>
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
                    <img src="{{asset('img/graphic-design-package.png')}}" alt="graphic-design-package"/>
                </div>
            </div>
            <div class="flex-1 ml-10 mt-10 md:mt-0">
                <p class="custom-red text-3xl font-bold mb-5">Graphic Design</p>
                <span class="line-under-section-title mb-10"></span>
                <p class="text-base custom-black-paragraph pr-5">Modern promo materials have always been in and unique graphic solutions are the first thing that attracts attention. Let our team of graphic grand masters pack your vision and values into your visual identity and assist you in attracting the attention of your clients and  competitors.</p>
            </div>
        </div>
    </section>
@endsection
