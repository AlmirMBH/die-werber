@extends('layouts.app')

@section('content')
    <section class="mt-28">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Animated content grabs attention!</p>
                <p class="text-base custom-black-paragraph">Video content has a lot of potential to attract attention of your audience and investing a little bit more effort can help your video to go viral. Let us help your brand become a smash hit and get the place in your branch it deserves.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/video-2d-info.gif')}}" alt="video-2d-info"/>
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
                    <img src="{{asset('img/video-2d-package.png')}}" alt="video-2d-package"/>
                </div>
            </div>
            <div class="flex-1 ml-10 mt-10 md:mt-0">
                <p class="custom-red text-3xl font-bold mb-5">2D Animations</p>
                <span class="line-under-section-title mb-10"></span>
                <p class="text-base custom-black-paragraph pr-5">The world of animations opens the door to an avenue of opportunities for your business, and your favorite character can even become a member of your team in it. Let the world see the funniest version of your brand and connect with you on a new level?</p>
            </div>
        </div>
    </section>
@endsection
