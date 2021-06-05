@extends('layouts.pages')

@section('title', 'Web Applications')
@section('content')
    @php
        $titleEnglish = "Develop <span class='text-titleBlack'> your Web Application to develop your </span> business";
        $topSectionTitleEnglish = "We will help you to reach your business goals!";
        $topSectionTextEnglish = "Digitalizing your business processes can make your company or organization more lively and enjoyable to your employees. Repetitive or complex tasks that require a lot of time and energy to complete can certainly be simplified. Let us find the right solution for you.";
        $bottomSectionTitleEnglish = "Web Aplications";
        $bottomSectionTextEnglish = "We are dedicated to delivering the best services to our clients. If you need a web app or a customized piece of software, contact us and we will get you the best one.  Let us help you reach the excellence in your business processes and inspire you to become a leader in what you do.";

        $titleGerman = "German title";
        $topSectionTitleGerman = "German top title";
        $topSectionTextGerman = "German top section text";
        $bottomSectionTitleGerman = "German bottom section title";
        $bottomSectionTextGerman = "German bottom section text";

        // images and alts
        $topSectionImage = "web-applications-info.png";
        $topSectionAlt = "web-applications-info";
        $bottomSectionImage = "web-applications-package.png";
        $bottomSectionAlt = "web-applications-package";
    @endphp

    <x-title-section-pages :titleEnglish="$titleEnglish" :titleGerman="$titleGerman"></x-title-section-pages>
    <x-top-section-pages
        :topSectionTitleEnglish="$topSectionTitleEnglish" :topSectionTextEnglish="$topSectionTextEnglish" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"
        :topSectionTitleGerman="$topSectionTitleGerman" :topSectionTextGerman="$topSectionTextGerman"
    ></x-top-section-pages>
    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages
        :bottomSectionTitleEnglish="$bottomSectionTitleEnglish" :bottomSectionTextEnglish="$bottomSectionTextEnglish" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"
        :bottomSectionTitleGerman="$bottomSectionTitleGerman" :bottomSectionTextGerman="$bottomSectionTextGerman"
    ></x-bottom-section-pages>
@endsection
