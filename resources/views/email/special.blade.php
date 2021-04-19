@extends('layouts.app')

@section('content')
    <section class="mt-20">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Bit by bit and you get a great brand…</p>
                <p class="text-base custom-black-paragraph">Majority of great brands have a common characteristic, special E-mails. Their content, layout, web version, multiple languages is what actually makes their E-mails so special. We know that creating an outstanding E-mail or newsletter can sometimes be a difficult task and that is why our team is always there for you. Let us help you send some of the most attractive and eye-catching emails in your branch.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/special.png')}}"/>
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
