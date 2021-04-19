@extends('layouts.app')

@section('content')
    <section class="mt-20">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Imagine your logo on your favorite team's bleachers!</p>
                <p class="text-base custom-black-paragraph">Have you ever wondered how your logo would look like on specific promo materials, fair stands or bleachers while your favorite team is playing? There is an easy way to find it out. Let us design your visual identity guidelines and help you conceptualize all the possible ways to utilize your brand identity to advance your business performance.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/brand.png')}}" alt="brand"/>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-20 wide-silver-section bg-gray-100">
        <div class="mx-auto max-w-6xl flex-col md:flex-row py-8">
            <div class="flex justify-center py-4 mb-8 wide-section-text">
                <p class="text-3xl text-center font-light leading-snug">We provide our clients with the best and most reliable PR,<br> Marketing and IT solutions in Switzerland </p>
            </div>
            <div class="img-holder">
                <img src="{{asset('img/wide-vision.png')}}" class="" />
            </div>
        </div
    </section>
@endsection
