@extends('layouts.pages')

@section('title', 'Email Medium')
@section('content')
    @php
        $title = "Customize <span class='text-titleBlack'> your content to customize</span>  your clients' preferences";
        $topSectionTitle = "Let your audience know what you do…";
        $topSectionText = "Getting the right message to the right audience is not easy, and there is no such thing as a perfect email but authentic and relevant
        messages definitely work. Provide your audience with a preview of your content, make them the hero of your story, and let them sign up for your brand,
        not for your email.";
        $topSectionImage = "email-medium-info.png";
        $topSectionAlt = "email-medium-info";
        $bottomSectionTitle = "Medium";
        $bottomSectionText = "Let us help you write your content and place it in our layout with your logo. After we send it to your clients, the statistical
        analysis will be available to you within ten working days. You will know exactly what your clients like or dislike and you can keep improving your
        campaigns until you perfect them.";
        $bottomSectionImage = "email-medium-package.png";
        $bottomSectionAlt = "email-medium-package";
    @endphp

    <x-title-section-pages :title="$title"></x-title-section-pages>
    <x-top-section-pages :topSectionTitle="$topSectionTitle" :topSectionText="$topSectionText" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"></x-top-section-pages>
    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages :bottomSectionTitle="$bottomSectionTitle" :bottomSectionText="$bottomSectionText" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"></x-bottom-section-pages>
@endsection
