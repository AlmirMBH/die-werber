@extends('layouts.app')

@section('content')

    <section class="wide-silver-section bg-gray-100 pt-16 md:pt-0 md:mt-5">
        <div class="mx-auto max-w-6xl flex-col md:flex-row py-8">
            <div class="flex justify-center py-4 wide-section-text">
                <h1 class="text-5xl text-center font-bold leading-snug text-titleRed px-2 md:px-0 md:w-1/2">
                    Draw <span class="text-titleBlack"> your </span> business processes
                    <span class="text-titleBlack">to draw your</span> way to new clients
                </h1>
            </div>
            <div class="flex justify-center mb-8 ">
                <span class="line-under-section-title mb-10"></span>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Draw what your brand does and keep the curiosity of your audience alive!</p>
                <p class="text-base custom-black-paragraph">Drawing and illustrating your business processes will make your brand lively again. Every stage of your business process, from your idea and research to the final product, has the potential to cast a different light on what you do and what you provide your clients with. Help your audience to become aware of what you can do for them.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/video-whiteboard-info.png')}}" alt="video-voice-info"/>
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
                    <img src="{{asset('img/video-whiteboard-package.png')}}" alt="video-whiteboard-package"/>
                </div>
            </div>
            <div class="flex-1 ml-10 mt-10 md:mt-0">
                <p class="custom-red text-3xl font-bold mb-5">Whiteboard drawings</p>
                <span class="line-under-section-title mb-10"></span>
                <p class="text-base custom-black-paragraph pr-5">It takes only a split second for people to decide if they will watch the rest of your video or not. Making your story natural part of your brand can be your advertising game changer and adding a little bit of humor and variety will help your video stand out among many others.</p>
            </div>
        </div>
    </section>

@endsection
