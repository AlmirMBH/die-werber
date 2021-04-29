@extends('layouts.app')

@section('title', '2D Animations')
@section('content')
    @php
        $title = "Animate <span class='text-titleBlack'> your video content to animate </span> your clients";
        $topSectionTitle = "Animated content grabs attention!";
        $topSectionText = "Video content has a lot of potential to attract attention of your audience and investing a little bit more effort can help your video to
        go viral. Let us help your brand become a smash hit and get the place in your branch it deserves.";
        $topSectionImage = "video-2d-info.gif";
        $topSectionAlt = "video-2d-info";
        $bottomSectionTitle = "2D Animations";
        $bottomSectionText = "The world of animations opens the door to an avenue of opportunities for your business, and your favorite character can even become
        a member of your team in it. Let the world see the funniest version of your brand and connect with you on a new level?";
        $bottomSectionImage = "video-2d-package.png";
        $bottomSectionAlt = "video-2d-package";
    @endphp

    <x-title-section-pages :title="$title"></x-title-section-pages>
    <x-top-section-pages :topSectionTitle="$topSectionTitle" :topSectionText="$topSectionText" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"></x-top-section-pages>
    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages :bottomSectionTitle="$bottomSectionTitle" :bottomSectionText="$bottomSectionText" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"></x-bottom-section-pages>
@endsection
