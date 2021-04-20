@extends('layouts.app')

@section('content')
    <section class="mt-28">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Imagine your logo on your favorite team's bleachers!</p>
                <p class="text-base custom-black-paragraph">Have you ever wondered how your logo would look like on specific promo materials, fair stands or bleachers while your favorite team is playing? There is an easy way to find it out. Let us design your visual identity guidelines and help you conceptualize all the possible ways to utilize your brand identity to advance your business performance.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/visual-identity-info.png')}}" alt="visual-identity-info"/>
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
                    <img src="{{asset('img/visual-identity-package.png')}}" alt="visual-identity-package"/>
                </div>
            </div>
            <div class="flex-1 ml-10 mt-10 md:mt-0">
                <p class="custom-red text-3xl font-bold mb-5">Visual identity</p>
                <span class="line-under-section-title mb-10"></span>
                <p class="text-base custom-black-paragraph pr-5">By defining visual identity of your brand you actually define the way you do business. Powerful businesses have powerful visual identity that brings about many benefits such as recognition and access to markets they would not otherwise be able to reach. Give your business a chance to become powerful. Let us design visual identity guidelines for your business.</p>
            </div>
        </div>
    </section>
@endsection
