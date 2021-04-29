@extends('layouts.pages')

@section('title', '3D Animations')
@section('content')
    @php
        $title = "<span class='text-titleBlack'>Give your video </span> the third dimension <span class='text-titleBlack'> to give your business </span> a dimension of attraction";
        $topSectionTitle = "Let your clients see their new offices or events days in advance!";
        $topSectionText = "Telling stories and providing clients with the opportunity to visualize their products and services is a trademark of great brands. Our video grand
        masters will invest hours of creative work to produce an outstanding video that your audience will like.";
        $topSectionImage = "video-3d-info.png";
        $topSectionAlt = "video-3d-info";
        $bottomSectionTitle = "3D Animations";
        $bottomSectionText = "Three-dimensional models, animations or geometric shapes can be combined into a mystical world of your own. Provide your audience with the
        opportunity to get a real insight into what you do.";
        $bottomSectionImage = "video-3d-package.png";
        $bottomSectionAlt = "video-3d-package";
    @endphp

    <x-title-section-pages :title="$title"></x-title-section-pages>
    <x-top-section-pages :topSectionTitle="$topSectionTitle" :topSectionText="$topSectionText" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"></x-top-section-pages>
    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages :bottomSectionTitle="$bottomSectionTitle" :bottomSectionText="$bottomSectionText" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"></x-bottom-section-pages>
@endsection
