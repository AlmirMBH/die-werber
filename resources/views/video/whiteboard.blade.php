@extends('layouts.pages')

@section('title', 'Whiteboard')
@section('content')
    @php
        $titleEnglish = "Draw <span class='text-titleBlack'> your </span> business processes <span class='text-titleBlack'>to draw your</span> way to new clients";
        $topSectionTitleEnglish = "Draw what your brand does and keep the curiosity of your audience alive!";
        $topSectionTextEnglish = "Drawing and illustrating your business processes will make your brand lively again. Every stage of your business process, from your idea and research to the final product, has the potential to cast a different light on what you do and what you provide your clients with. Help your audience to become aware of what you can do for them.";
        $bottomSectionTitleEnglish = "Whiteboard Drawings";
        $bottomSectionTextEnglish = "It takes only a split second for people to decide if they will watch the rest of your video or not. Making your story natural part of your brand can be your advertising game changer and adding a little bit of humor and variety will help your video stand out among many others.";

        $titleGerman = "German title";
        $topSectionTitleGerman = "German top title";
        $topSectionTextGerman = "German top section text";
        $bottomSectionTitleGerman = "German bottom section title";
        $bottomSectionTextGerman = "German bottom section text";

        // images and alts
        $topSectionImage = "video-whiteboard-info.png";
        $topSectionAlt = "video-whiteboard-info";
        $bottomSectionImage = "video-whiteboard-package.png";
        $bottomSectionAlt = "video-whiteboard-package";
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
