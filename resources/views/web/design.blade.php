@extends('layouts.pages')

@section('title', 'Web Design')
@section('content')
    @php
        $title = "Design <span class='text-titleBlack'> your web content to design your </span> business opportunities";
        $topSectionTitle = "Ready for web magic?";
        $topSectionText = "Our work is product of our passion, smart planning and extraordinary personal commitment. The craziest webdesign has been winning over our
        clients’ sympathies over and over again. Set off on a lively journey and find out why…";
        $topSectionImage = "web-design-info.png";
        $topSectionAlt = "web-design-info";
        $bottomSectionTitle = "Web Design";
        $bottomSectionText = "Whether you need a simple static page or complex web-based internet applications and e-commerce
        we are the best and most cost-efficient option for you.";
        $bottomSectionImage = "web-design-package.png";
        $bottomSectionAlt = "web-design-package";
    @endphp

    <x-title-section-pages :title="$title"></x-title-section-pages>
    <x-top-section-pages :topSectionTitle="$topSectionTitle" :topSectionText="$topSectionText" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"></x-top-section-pages>
    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages :bottomSectionTitle="$bottomSectionTitle" :bottomSectionText="$bottomSectionText" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"></x-bottom-section-pages>
@endsection
