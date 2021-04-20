@extends('layouts.app')

@section('content')
    <section class="mt-28">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Let us create something unique - your logo!</p>
                <p class="text-base custom-black-paragraph">Let us help you become a recognizable member of your business branch. Tell us about your corporate colors, values and vision and we will design a meaningful logo for your business. A logo that reflects who you are and what you stand for.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/logo-design-info.png')}}" alt="visual-identity-info"/>
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
                    <img src="{{asset('img/logo-design-package.png')}}" alt="logo-design-package"/>
                </div>
            </div>
            <div class="flex-1 ml-10 mt-10 md:mt-0">
                <p class="custom-red text-3xl font-bold mb-5">Logo design</p>
                <span class="line-under-section-title mb-10"></span>
                <p class="text-base custom-black-paragraph pr-5">We are a creative team ready to do outstanding work for your brand and teamwork is our most powerful weapon. We follow the latest trends and turn your ideas into reality. Your deadline is our priority. </p>
            </div>
        </div>
    </section>
@endsection
