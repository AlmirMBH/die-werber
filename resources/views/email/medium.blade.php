@extends('layouts.pages')

@section('title', 'Email Medium')
@section('content')
    @php
        $titleEnglish = "Customize <span class='text-titleBlack'> your content to customize</span>  your clients' preferences";
        $topSectionTitleEnglish = "Let your audience know what you do…";
        $topSectionTextEnglish = "Getting the right message to the right audience is not easy, and there is no such thing as a perfect email but authentic and relevant messages definitely work. Provide your audience with a preview of your content, make them the hero of your story, and let them sign up for your brand, not for your email.";
        $bottomSectionTitleEnglish = "Medium";
        $bottomSectionTextEnglish = "Let us help you write your content and place it in our layout with your logo. After we send it to your clients, the statistical analysis will be available to you within ten working days. You will know exactly what your clients like or dislike and you can keep improving your campaigns until you perfect them.";

        $titleGerman = "Title German";
        $topSectionTitleGerman = "Top section title German";
        $topSectionTextGerman = "Top section text German";
        $bottomSectionTitleGerman = "Bottom section title German";
        $bottomSectionTextGerman = "Bottom section text German";

        // images and alts
        $topSectionImage = "email-medium-info.png";
        $topSectionAlt = "email-medium-info";
        $bottomSectionImage = "email-medium-package.png";
        $bottomSectionAlt = "email-medium-package";
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
