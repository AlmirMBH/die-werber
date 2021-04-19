@extends('layouts.app')

@section('content')
    <section class="mt-20">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Every E-mail takes you one step closer to understanding what your clients like…</p>
                <p class="text-base custom-black-paragraph">We all know that E-mails are a great means of communication, but we hardly ever think about them as surveys. All the E-mails you send to your audience can be your questionnaires that tell you who your audience is and what your clients expect from you. And by understanding what your audience wants, you will know what your next step is.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/advanced.png')}}"/>
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
