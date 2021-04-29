@extends('layouts.app')

@section('title', 'Whiteboard')
@section('content')
    @php
        $title = "Draw <span class='text-titleBlack'> your </span> business processes <span class='text-titleBlack'>to draw your</span> way to new clients";
        $topSectionTitle = "Draw what your brand does and keep the curiosity of your audience alive!";
        $topSectionText = "Drawing and illustrating your business processes will make your brand lively again. Every stage of your business process, from your
        idea and research to the final product, has the potential to cast a different light on what you do and what you provide your clients with. Help your
        audience to become aware of what you can do for them.";
        $topSectionImage = "video-whiteboard-info.png";
        $topSectionAlt = "video-whiteboard-info";
        $bottomSectionTitle = "Whiteboard Drawings";
        $bottomSectionText = "It takes only a split second for people to decide if they will watch the rest of your video or not. Making your story natural part
        of your brand can be your advertising game changer and adding a little bit of humor and variety will help your video stand out among many others.";
        $bottomSectionImage = "video-whiteboard-package.png";
        $bottomSectionAlt = "video-whiteboard-package";
    @endphp

    <x-title-section-pages :title="$title"></x-title-section-pages>
    <x-top-section-pages :topSectionTitle="$topSectionTitle" :topSectionText="$topSectionText" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"></x-top-section-pages>
    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages :bottomSectionTitle="$bottomSectionTitle" :bottomSectionText="$bottomSectionText" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"></x-bottom-section-pages>
@endsection
