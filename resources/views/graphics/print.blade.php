@extends('layouts.app')

@section('content')

    <section class="mt-20 wide-silver-section bg-gray-100">
        <div class="mx-auto max-w-6xl flex-col md:flex-row py-8">
            <div class="flex justify-center py-4 wide-section-text">
                <h1 class="text-5xl text-center font-bold leading-snug text-titleRed">
                    Print <span class="text-titleBlack"> your </span> materials <span class="text-titleBlack"> to <br>
                print your </span> ticket to the<br> business world
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
                <p class="custom-black text-xl font-semibold mb-5">Let your posters, brochures and flyers carry your message to the remotest regions of the business world</p>
                <p class="text-base custom-black-paragraph">Reaching your clients is not always easy, but managing the content that conveys the right message while reaching your clients could be a piece of cake. Let us help you make sure that your brochures, flyers and posters convey the best design and quality message in the printing world.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/graphic-print-info.png')}}" alt="graphic-print-info"/>
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
                    <img src="{{asset('img/graphic-print-package.png')}}" alt="graphic-print-package"/>
                </div>
            </div>
            <div class="flex-1 ml-10 mt-10 md:mt-0">
                <p class="custom-red text-3xl font-bold mb-5">Print materials</p>
                <span class="line-under-section-title mb-10"></span>
                <p class="text-base custom-black-paragraph pr-5">As the old saying goes, “If you want something done right, you have to let Die Werber do it”. Years of experience make us capable of converting your ideas into promo miracles. Let our team of printing maestros help you achieve recognition and secure a long-lasting place in the memory of your clients.</p>
            </div>
        </div>
    </section>
@endsection
