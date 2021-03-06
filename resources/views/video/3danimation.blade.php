@extends('layouts.pages')

@section('title', '3D Animations')
@section('content')
    @php
        $titleEnglish = "<span class='text-titleBlack'>Give your video </span> the third dimension <span class='text-titleBlack'> to give your business </span> a dimension of attraction";
        $topSectionTitleEnglish = "Let your clients see their new offices or events days in advance!";
        $topSectionTextEnglish = "Telling stories and providing clients with the opportunity to visualize their products and services is a trademark of great brands. Our video grand masters will invest hours of creative work to produce an outstanding video that your audience will like.";
        $bottomSectionTitleEnglish = "3D Animations";
        $bottomSectionTextEnglish = "Three-dimensional models, animations or geometric shapes can be combined into a mystical world of your own. Provide your audience with the opportunity to get a real insight into what you do.";

        $titleGerman = "Geben Sie Ihrem Video die dritte Dimension, um Ihrem Unternehmen eine attraktive Dimension zu verleihen";
        $topSectionTitleGerman = "Lassen Sie Ihre Kunden ihre neuen Büros oder Veranstaltungstage im Voraus sehen!";
        $topSectionTextGerman = "Geschichten erzählen und Kunden die Möglichkeit geben, ihre Produkte und Dienstleistungen zu visualisieren, ist ein Markenzeichen grosser Marken. Unsere Videogrossmeister werden stundenlang kreative Arbeit investieren, um ein herausragendes Video zu produzieren, das Ihrem Publikum gefallen wird.";
        $bottomSectionTitleGerman = "3D Animation";
        $bottomSectionTextGerman = "Dreidimensionale Modelle, Animationen oder geometrische Formen können zu einer eigenen mystischen Welt kombiniert werden. Bieten Sie Ihrem Publikum die Möglichkeit, einen echten Einblick in Ihre Aktivitäten zu erhalten.";

        // images and alts
        $topSectionImage = "video-3d-info.png";
        $topSectionAlt = "video-3d-info";
        $bottomSectionImage = "video-3d-package.png";
        $bottomSectionAlt = "video-3d-package";
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
