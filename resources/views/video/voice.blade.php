@extends('layouts.app')

@section('content')
    <section class="mt-20">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Let us help you outvoice the voices of your competition...</p>
                <p class="text-base custom-black-paragraph">Clear, understandable and pleasant voice should be part of the personality of every company. The right voice makes your messages more interesting and appealing to your clients. It helps them understand your business and engage with your brand.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/voice.png')}}" alt="3d video"/>
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
