@extends('layouts.app')

@section('title', 'Illustrations')
@section('content')
    @php
        $title = "Illustrate <span class='text-titleBlack'> your </span> content to <span class='text-titleBlack'> illustrate your </span> way to your vision";
        $topSectionTitle = "Use your 10 seconds to grab attention and deliver your message";
        $topSectionText = "You want majority of the human kind to like your content? Cool! You already know that 70% of people are visual learners and our team
        of design vultures knows what they need. Let us compress your ideas and blend them with various concepts to get a unique content that outshines the
        shine itself.";
        $topSectionImage = "graphic-illustrations-info.png";
        $topSectionAlt = "graphic-illustrations-info";
        $bottomSectionTitle = "Illustrations";
        $bottomSectionText = "Photography, drawings, patterns and whatnot combined into illustrations is a magical dimension of graphic design. It can enchant
        your clients and get your business out of the labyrinth of business challenges to the holly land of success and eternal business happiness.";
        $bottomSectionImage = "graphic-illustrations-package.png";
        $bottomSectionAlt = "graphic-illustrations-package";
    @endphp

    <x-section-title :title="$title"></x-section-title>
    <x-top-section-pages :topSectionTitle="$topSectionTitle" :topSectionText="$topSectionText" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"></x-top-section-pages>
    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages :bottomSectionTitle="$bottomSectionTitle" :bottomSectionText="$bottomSectionText" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"></x-bottom-section-pages>
@endsection
