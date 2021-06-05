@extends('layouts.pages')

@section('title', 'Hosting')
@section('content')
    @php
        $titleEnglish = "Host <span class='text-titleBlack'> your place on the web to host your place in the </span> business world";
        $topSectionTitleEnglish = "Host your website to host your business partners";
        $topSectionTextEnglish = "Keeping your website up and running smoothly in the competitive business world, where interrupted availability may cause you to lose patience and clients, is not an easy task. For this purpose we created packages in a variety of disk space and monthly data transfer sizes that can be upgraded at any time. Do not let your website be the cause of your nightmares. Let us provide you with our alien technologies and services that will get your website noticed and appreciated…";
        $bottomSectionTitleEnglish = "Hosting";
        $bottomSectionTextEnglish = "Far far away, behind the mountains of  data, where no hacker has ever set foot, there exist our servers ready to host your website in the most secured and mysterious location. Use the privilege of storing your web content with us!";

        $titleGerman = "German title";
        $topSectionTitleGerman = "Top section title German";
        $topSectionTextGerman = "Top section text German";
        $bottomSectionTitleGerman = "Hosting";
        $bottomSectionTextGerman = "Hosting German";
        // images and alts
        $bottomSectionImage = "web-hosting-package.png";
        $bottomSectionAlt = "web-hosting-package";
    @endphp

    <x-title-section-pages :titleEnglish="$titleEnglish" :titleGerman="$titleGerman"></x-title-section-pages>

    <div class="max-w-6xl flex flex-col md:flex-row mx-auto mt-10">
        <div class="flex-1 mt-8 pl-10 p-5">
            <p class="custom-black text-xl font-semibold mb-5" data-en="{{$topSectionTitleEnglish}}" data-de="{{$topSectionTitleGerman}}">{{$topSectionTitleGerman}}</p>
            <p class="text-base custom-black-paragraph" data-en="{{$topSectionTextEnglish}}" data-de="{{$topSectionTextGerman}}">{{$topSectionTextGerman}}</p>
            <ul class="hosting-package-offer mt-7 ml-5">
                <li>Starter plan</li>
                <li>Intermediate plan</li>
                <li>Advanced plan</li>
                <li>Business plan</li>
            </ul>
        </div>
        <div class="flex-1">
            <div class="section-image">
                <img src="{{asset('img/web-hosting-info.png')}}" alt="web-hosting-info"/>
            </div>
        </div>
    </div>

    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages
        :bottomSectionTitleEnglish="$bottomSectionTitleEnglish" :bottomSectionTextEnglish="$bottomSectionTextEnglish" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"
        :bottomSectionTitleGerman="$bottomSectionTitleGerman" :bottomSectionTextGerman="$bottomSectionTextGerman"
    ></x-bottom-section-pages>
@endsection



