@extends('layouts.app')

@section('content')

    <section class="wide-silver-section bg-gray-100">
        <div class="mx-auto max-w-6xl flex-col md:flex-row py-8">
            <div class="flex justify-center py-4 wide-section-text">
                <h1 class="text-5xl text-center font-bold leading-snug text-titleRed">
                    Develop <span class="text-titleBlack"> your Web<br>Application to develop<br> your </span> business
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
                <p class="custom-black text-xl font-semibold mb-5">We will help you to reach your business goals!</p>
                <p class="text-base custom-black-paragraph">Digitalizing your business processes can make your company or organization more lively and enjoyable to your employees. Repetitive or complex tasks that require a lot of time and energy to complete can certainly be simplified. Let us find the right solution for you.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/web-applications-info.png')}}" alt="web-applications-info"/>
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
                    <img src="{{asset('img/web-applications-package.png')}}" alt="web-applications-package"/>
                </div>
            </div>
            <div class="flex-1 ml-10 mt-10 md:mt-0">
                <p class="custom-red text-3xl font-bold mb-5">Web Aplications</p>
                <span class="line-under-section-title mb-10"></span>
                <p class="text-base custom-black-paragraph pr-5">We are dedicated to delivering the best services to our clients. If you need a web app or a customized piece of software, contact us and we will get you the best one.  Let us help you reach the excellence in your business processes and inspire you to become a leader in what you do.</p>
            </div>
        </div>
    </section>

@endsection
