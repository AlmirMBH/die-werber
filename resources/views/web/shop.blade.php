@extends('layouts.pages')

@section('title', 'Web Shop')
@section('content')
    @php
        $title = "Open <span class='text-titleBlack'> your </span> web shop <span class='text-titleBlack'> to open the</span> the door to new opportunities";
        $topSectionTitle = "Two billion buyers are just one click away from you!";
        $topSectionText = "A number of online buyers seem to be ginormous and it will certainly continue to grow. Majority of social media users start their purchases
        or buy products via social networks. This can be your opportunity to expand your client basis and sell in quantities as never before. Your potential clients
        are just a click away from you. Before you allow yourself to doubt it, test it…";
        $topSectionImage = "web-shop-info.png";
        $topSectionAlt = "web-shop-info";
        $bottomSectionTitle = "Web Shop";
        $bottomSectionText = "Whether you want to sell online, in your store, or out of the comfort of your home, we will provide you with the best and most attractive
        solution. Tell us what you sell, your favorite colors and shapes, and we will create the most creative web shop that offers unparalleled services for the most
        discerning clients.";
        $bottomSectionImage = "web-shop-package.png";
        $bottomSectionAlt = "web-shop-package";
    @endphp

    <x-title-section-pages :title="$title"></x-title-section-pages>
    <x-top-section-pages :topSectionTitle="$topSectionTitle" :topSectionText="$topSectionText" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"></x-top-section-pages>
    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages :bottomSectionTitle="$bottomSectionTitle" :bottomSectionText="$bottomSectionText" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"></x-bottom-section-pages>
@endsection
