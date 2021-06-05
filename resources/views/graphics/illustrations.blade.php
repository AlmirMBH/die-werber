@extends('layouts.pages')

@section('title', 'Illustrations')
@section('content')
    @php
        $titleEnglish = "Illustrate <span class='text-titleBlack'> your </span> content to <span class='text-titleBlack'> illustrate your </span> way to your vision";
        $topSectionTitleEnglish = "Use your 10 seconds to grab attention and deliver your message";
        $topSectionTextEnglish = "You want majority of the human kind to like your content? Cool! You already know that 70% of people are visual learners and our team of design vultures knows what they need. Let us compress your ideas and blend them with various concepts to get a unique content that outshines the shine itself.";
        $bottomSectionTitleEnglish = "Illustrations";
        $bottomSectionTextEnglish = "Photography, drawings, patterns and whatnot combined into illustrations is a magical dimension of graphic design. It can enchant your clients and get your business out of the labyrinth of business challenges to the holly land of success and eternal business happiness.";

        $titleGerman = "German title";
        $topSectionTitleGerman = "German top title";
        $topSectionTextGerman = "German top section text";
        $bottomSectionTitleGerman = "German bottom section title";
        $bottomSectionTextGerman = "German bottom section text";

        // images and alts
        $topSectionImage = "graphic-illustrations-info.png";
        $topSectionAlt = "graphic-illustrations-info";
        $bottomSectionImage = "graphic-illustrations-package.png";
        $bottomSectionAlt = "graphic-illustrations-package";
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
