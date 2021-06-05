@extends('layouts.pages')

@section('title', 'Logo Design')
@section('content')
    @php
        $titleEnglish = "Let <span class='text-titleBlack'> your </span> logo tell <span class='text-titleBlack'> the right <span class='text-titleRed'>story</span> about you </span>";
        $topSectionTitleEnglish = "Let us create something unique - your logo!";
        $topSectionTextEnglish = "Let us help you become a recognizable member of your business branch. Tell us about your corporate colors, values and vision and we will design a meaningful logo for your business. A logo that reflects who you are and what you stand for.";
        $bottomSectionTitleEnglish = "Logo Design";
        $bottomSectionTextEnglish = "We are a creative team ready to do outstanding work for your brand and teamwork is our most powerful weapon. We follow the latest trends and turn your ideas into reality. Your deadline is our priority.";

        $titleGerman = "German title";
        $topSectionTitleGerman = "German top title";
        $topSectionTextGerman = "German top section text";
        $bottomSectionTitleGerman = "German bottom section title";
        $bottomSectionTextGerman = "German bottom section text";

        // images and alts
        $topSectionImage = "logo-design-info.png";
        $topSectionAlt = "logo-design-info";
        $bottomSectionImage = "logo-design-package.png";
        $bottomSectionAlt = "logo-design-package";
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
