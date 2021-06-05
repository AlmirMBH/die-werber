@extends('layouts.pages')

@section('title', 'Analysis')
@section('content')
    @php
        $titleEnglish = "Let us analyze your website <span class='text-titleBlack'><br> FREE OF CHARGE </span>";
        $titleGerman = "German title";
    @endphp

    <x-title-section-pages :titleEnglish="$titleEnglish" :titleGerman="$titleGerman"></x-title-section-pages>

    <section>
        <div class="analysis-text max-w-6xl mx-auto">
            <h2 class="text-center text-5xl font-nunito font-weight-bolder ">Would you like your website…</h2>
        </div>

        <div class="analysis-top-row mx-auto max-w-6xl mt-16">
            <p class="text-center mb-6 text-lg">… to be linked properly with your social<br>media (Facebook etc.)?</p>
            <img src="{{asset('img/seo1.png')}}" alt="seo-analysis" class="mx-auto">
        </div>
    </section>

    <section>
        <div class="analysis-mid-row flex flex-col md:flex-row mt-10">
            <div class="analysis-mobile flex-1">
                <div class="analysis-mobile-title flex justify-center md:justify-end">
                    <p class="text-center text-lg mb-6 md:mr-14">… to be optimized for<br>mobile phones?</p>
                </div>
                <div class="analysis-mobile-img flex justify-center">
                    <img src="{{asset('img/seo2.png')}}" alt="seo-analysis" class="md:block md:ml-auto mr-5">
                </div>
            </div>
            <div class="analysis-mid-text inline-block w-full px-2 md:w-1/5">
                <p class="text-titleBlack font-nunito text-center font-extrabold text-3xl mt-10 md:mt-44">Then let us analyze your website for</p>
                <p class="text-titleRed text-center font-extrabold text-4xl align-bottom my-10 md:mb-0">FREE</p>
            </div>
            <div class="analysis-seo flex-1">
                <div class="analysis-mobile-title flex justify-center md:justify-start">
                    <p class="text-center text-lg mb-6 md:ml-14">… to be optimized for<br>search engines?</p>
                </div>
                <div class="analysis-seo-img flex justify-center">
                    <img src="{{asset('img/seo3.png')}}" alt="seo-analysis" class="md:block md:mr-auto ml-5">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="analysis-mid-row flex flex-col md:flex-row mt-10">
            <div class="analysis-mobile flex-1">
                <p class="text-center mb-6 text-lg">… to open faster?</p>
                <img src="{{asset('img/seo4.png')}}" alt="seo-analysis" class="mx-auto">
            </div>
            <div class="analysis-mid-text inline-block w-full px-2 md:w-1/5 my-10 md:my-0">
                <form action="" method="POST">
                    <input type="text" id="analysis-url" name="url" placeholder="Web URL *" class="block border-dark border-2 w-full sm:w-1/2 sm:mx-auto md:w-full py-3 pl-5 pr-20 mb-5">
                    <input type="email" id="analysis-email" name="email" placeholder="Email address *" class="block border-dark border-2 w-full sm:w-1/2 sm:mx-auto md:w-full py-3 pl-5 pr-20 mb-5">
                    <button id="analysis-btn" class="text-center block py-4 px-12 mx-auto">Check</button>
                </form>
            </div>
            <div class="analysis-seo flex-1">
                <p class="text-center mb-6 text-lg">… to attract more visitors?</p>
                <img src="{{asset('img/seo5.png')}}" alt="seo-analysis" class="mx-auto">
            </div>
        </div>
    </section>

@endsection
