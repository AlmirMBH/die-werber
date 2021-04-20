@extends('layouts.app')

@section('content')

    <section class="mt-20 wide-silver-section bg-gray-100">
        <div class="mx-auto max-w-6xl flex-col md:flex-row py-8">
            <div class="flex justify-center py-4 wide-section-text">
                <h1 class="text-5xl text-center font-bold leading-snug text-titleRed">
                    Illustrate <span class="text-titleBlack"> your </span> content to <br> <span class="text-titleBlack"> illustrate your </span> way to your<br> vision
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
                <p class="custom-black text-xl font-semibold mb-5">Use your 10 seconds to grab attention and deliver your message</p>
                <p class="text-base custom-black-paragraph">You want majority of the human kind to like your content? Cool! You already know that 70% of people are visual learners and our team of design vultures knows what they need. Let us compress your ideas and blend them with various concepts to get a unique content that outshines the shine itself.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/graphic-illustrations-info.png')}}" alt="graphic-illustrations-info"/>
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
                    <img src="{{asset('img/graphic-illustrations-package.png')}}" alt="graphic-illustrations-package"/>
                </div>
            </div>
            <div class="flex-1 ml-10 mt-10 md:mt-0">
                <p class="custom-red text-3xl font-bold mb-5">Illustrations</p>
                <span class="line-under-section-title mb-10"></span>
                <p class="text-base custom-black-paragraph pr-5">Photography, drawings, patterns and whatnot combined into illustrations is a magical dimension of graphic design. It can enchant your clients and get your business out of the labyrinth of business challenges to the holly land of success and eternal business happiness.</p>
            </div>
        </div>
    </section>
@endsection
