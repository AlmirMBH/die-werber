@extends('layouts.app')

@section('content')

    <section class="wide-silver-section bg-gray-100">
        <div class="mx-auto max-w-6xl flex-col md:flex-row py-8">
            <div class="flex justify-center py-4 wide-section-text">
                <h1 class="text-5xl text-center font-bold leading-snug text-titleRed">
                    Successful brands <span class="text-titleBlack">send</span><br>
                    special E-mails
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
                <p class="custom-black text-xl font-semibold mb-5">Bit by bit and you get a great brand…</p>
                <p class="text-base custom-black-paragraph">Majority of great brands have a common characteristic, special E-mails. Their content, layout, web version, multiple languages is what actually makes their E-mails so special. We know that creating an outstanding E-mail or newsletter can sometimes be a difficult task and that is why our team is always there for you. Let us help you send some of the most attractive and eye-catching emails in your branch.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/email-special-info.png')}}" alt="email-special-info"/>
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
                <img src="{{asset('img/general-mission-section.png')}}"  alt="company-mission"/>
            </div>
        </div>
    </section>

    <section class="mt-28">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/email-special-package.png')}}" alt="email-special-package"/>
                </div>
            </div>
            <div class="flex-1 ml-10 mt-10 md:mt-0">
                <p class="custom-red text-3xl font-bold mb-5">Special</p>
                <span class="line-under-section-title mb-10"></span>
                <p class="text-base custom-black-paragraph pr-5">Let us help you write your content in multiple languages and place it in a customized layout with your favorite colors and shapes. The design of the web version of your newsletter will satisfy the taste of the most demanding clients. In addition to your E-mailing list, we will provide you with our own, and after we send your content to the clients, the statistical analysis will be available to you within ten working days. </p>
            </div>
        </div>
    </section>

@endsection
