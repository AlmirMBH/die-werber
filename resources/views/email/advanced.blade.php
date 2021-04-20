@extends('layouts.app')

@section('content')

    <section class="mt-20 wide-silver-section bg-gray-100">
        <div class="mx-auto max-w-6xl flex-col md:flex-row py-8">
            <div class="flex justify-center py-4 wide-section-text">
                <h1 class="text-5xl text-center font-bold leading-snug text-titleRed">
                    Advance<span class="text-titleBlack"> your</span> E-mail<br>
                    marketing <span class="text-titleBlack"> to advance your </span> <br>
                    client basis
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
                <p class="custom-black text-xl font-semibold mb-5">Every E-mail takes you one step closer to understanding what your clients like…</p>
                <p class="text-base custom-black-paragraph">We all know that E-mails are a great means of communication, but we hardly ever think about them as surveys. All the E-mails you send to your audience can be your questionnaires that tell you who your audience is and what your clients expect from you. And by understanding what your audience wants, you will know what your next step is.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/email-advanced-info.png')}}" alt="email-advanced-info"/>
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
                    <img src="{{asset('img/email-advanced-package.png')}}" alt="email-advanced-package"/>
                </div>
            </div>
            <div class="flex-1 ml-10 mt-10 md:mt-0">
                <p class="custom-red text-3xl font-bold mb-5">Advanced</p>
                <span class="line-under-section-title mb-10"></span>
                <p class="text-base custom-black-paragraph pr-5">Writing content and placing it in a customized layout with your favorite colors and shapes is what we do best. After receiving your emails, your clients will feel as if they finally see the road signs on a difficult road that lead them straight to their destination, your brand. The statistical analysis will be available to you within ten working days and you will know exactly which direction towards your success you want to take.</p>
            </div>
        </div>
    </section>
@endsection
