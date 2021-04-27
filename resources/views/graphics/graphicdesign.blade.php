@extends('layouts.app')

@section('content')
    @php
        $title = "Design <span class='text-titleBlack'> your </span> content <span class='text-titleBlack'> to design your </span> business <br> opportunities";
        $topSectionTitle = "Your graphic content is the most sincere intermediary between you and your client!";
        $topSectionText = "As the old saying goes, “Actions speak louder than words”. Let us combine your messages with photos, illustrations and drawings and make
        them speak louder than your words. Let them leave a memorable impression on your clients. An irresistible impression that turns incorrigible phlegamtics
        into curios explorers.";
        $topSectionImage = "graphic-design-info.png";
        $topSectionAlt = "graphic-design-info";
        $missionText = "We provide our clients with the best and most reliable PR, Marketing and IT solutions in Switzerland";
        $bottomSectionTitle = "Graphic Design";
        $bottomSectionText = "Modern promo materials have always been in and unique graphic solutions are the first thing that attracts attention. Let our team of
        graphic grand masters pack your vision and values into your visual identity and assist you in attracting the attention of your clients and  competitors.";
        $bottomSectionImage = "graphic-design-package.png";
        $bottomSectionAlt = "graphic-design-package";
    @endphp

    <x-section-title :title="$title"></x-section-title>
    <x-top-section-pages :topSectionTitle="$topSectionTitle" :topSectionText="$topSectionText" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"></x-top-section-pages>
    <x-mid-section-pages :missionText="$missionText"></x-mid-section-pages>
    <x-bottom-section-pages :bottomSectionTitle="$bottomSectionTitle" :bottomSectionText="$bottomSectionText" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"></x-bottom-section-pages>
@endsection
