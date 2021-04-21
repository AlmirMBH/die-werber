@extends('layouts.app')

@section('content')

    <section class="wide-silver-section bg-gray-100 pt-16 md:pt-0 md:mt-5">
        <div class="mx-auto max-w-6xl flex-col md:flex-row py-8">
            <div class="flex justify-center py-4 wide-section-text">
                <p class="text-5xl text-center font-bold leading-snug text-titleRed px-2 md:px-0 md:w-1/2">
                    Your business voice <span class="text-titleBlack"> is the reflection of </span> your own voice
                </p>
            </div>
            <div class="flex justify-center mb-8 ">
                <span class="line-under-section-title mb-10"></span>
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Let us help you outvoice the voices of your competition...</p>
                <p class="text-base custom-black-paragraph">Clear, understandable and pleasant voice should be part of the personality of every company. The right voice makes your messages more interesting and appealing to your clients. It helps them understand your business and engage with your brand.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/video-voice-info.png')}}" alt="video-voice-info"/>
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
                    <img src="{{asset('img/video-voice-package.png')}}" alt="video-voice-package"/>
                </div>
            </div>
            <div class="flex-1 ml-10 mt-10 md:mt-0">
                <p class="custom-red text-3xl font-bold mb-5">Voice test</p>
                <span class="line-under-section-title mb-10"></span>
                <p class="text-base custom-black-paragraph pr-5">The louder your voice is, the more it resonates with your clients. Your voice embodies your vision and helps you grow your audience. Let us give your business a booming voice that shatters the glasses and market boundaries to your audience.</p>
            </div>
        </div>
    </section>

@endsection
