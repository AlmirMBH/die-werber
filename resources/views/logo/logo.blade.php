@extends('layouts.app')

@section('content')
    @php
        $title = "Let <span class='text-titleBlack'> your </span> logo tell <span class='text-titleBlack'> the right <span class='text-titleRed'>story</span> about you </span>";
        $topSectionTitle = "Let us create something unique - your logo!";
        $topSectionText = "Let us help you become a recognizable member of your business branch. Tell us about your corporate colors, values and vision and we will design
        a meaningful logo for your business. A logo that reflects who you are and what you stand for.";
        $topSectionImage = "logo-design-info.png";
        $topSectionAlt = "logo-design-info";
        $bottomSectionTitle = "Logo Design";
        $bottomSectionText = "We are a creative team ready to do outstanding work for your brand and teamwork is our most powerful weapon. We follow the latest trends and turn
        your ideas into reality. Your deadline is our priority.";
        $bottomSectionImage = "logo-design-package.png";
        $bottomSectionAlt = "logo-design-package";
    @endphp

    <x-section-title :title="$title"></x-section-title>
    <x-top-section-pages :topSectionTitle="$topSectionTitle" :topSectionText="$topSectionText" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"></x-top-section-pages>
    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages :bottomSectionTitle="$bottomSectionTitle" :bottomSectionText="$bottomSectionText" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"></x-bottom-section-pages>
@endsection
