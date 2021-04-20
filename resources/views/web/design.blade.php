@extends('layouts.app')

@section('content')
    <section class="mt-28">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Ready for web magic?</p>
                <p class="text-base custom-black-paragraph">Our work is product of our passion, smart planning and extraordinary personal commitment. The craziest webdesign has been winning over our clients’ sympathies over and over again. Set off on a lively journey and find out why…</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/web-design-info.png')}}" alt="web-design-info"/>
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
                    <img src="{{asset('img/web-design-package.png')}}" alt="web-design-package"/>
                </div>
            </div>
            <div class="flex-1 ml-10 mt-10 md:mt-0">
                <p class="custom-red text-3xl font-bold mb-5">Web design</p>
                <span class="line-under-section-title mb-10"></span>
                <p class="text-base custom-black-paragraph pr-5">Whether you need a simple static page or complex web-based internet applications and e-commerce we are the best and most cost-efficient option for you.</p>
            </div>
        </div>
    </section>
@endsection
