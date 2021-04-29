@extends('layouts.app')

@section('title', 'Voice Test')
@section('content')
    @php
        $title = "Your business voice <span class='text-titleBlack'> is the reflection of </span> your own voice";
        $topSectionTitle = "Let us help you outvoice the voices of your competition...";
        $topSectionText = "Clear, understandable and pleasant voice should be part of the personality of every company. The right voice makes your messages
        more interesting and appealing to your clients. It helps them understand your business and engage with your brand.";
        $topSectionImage = "video-voice-info.png";
        $topSectionAlt = "video-voice-info";
        $bottomSectionTitle = "Voice Test";
        $bottomSectionText = "The louder your voice is, the more it resonates with your clients. Your voice embodies your vision and helps you grow your audience.
        Let us give your business a booming voice that shatters the glasses and market boundaries to your audience.";
        $bottomSectionImage = "video-voice-package.png";
        $bottomSectionAlt = "video-voice-package";
    @endphp

    <x-title-section-pages :title="$title"></x-title-section-pages>
    <x-top-section-pages :topSectionTitle="$topSectionTitle" :topSectionText="$topSectionText" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"></x-top-section-pages>
    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages :bottomSectionTitle="$bottomSectionTitle" :bottomSectionText="$bottomSectionText" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"></x-bottom-section-pages>
@endsection
