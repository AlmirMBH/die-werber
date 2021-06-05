@extends('layouts.pages')

@section('title', 'Web Shop')
@section('content')
    @php
        $titleEnglish = "Open <span class='text-titleBlack'> your </span> web shop <span class='text-titleBlack'> to open the</span> the door to new opportunities";
        $topSectionTitleEnglish = "Two billion buyers are just one click away from you!";
        $topSectionTextEnglish = "A number of online buyers seem to be ginormous and it will certainly continue to grow. Majority of social media users start their purchases or buy products via social networks. This can be your opportunity to expand your client basis and sell in quantities as never before. Your potential clients are just a click away from you. Before you allow yourself to doubt it, test it…";
        $bottomSectionTitleEnglish = "Web Shop";
        $bottomSectionTextEnglish = "Whether you want to sell online, in your store, or out of the comfort of your home, we will provide you with the best and most attractive solution. Tell us what you sell, your favorite colors and shapes, and we will create the most creative web shop that offers unparalleled services for the most discerning clients.";

        $titleGerman = "German title";
        $topSectionTitleGerman = "German top title";
        $topSectionTextGerman = "German top section text";
        $bottomSectionTitleGerman = "German bottom section title";
        $bottomSectionTextGerman = "German bottom section text";

        // images and alts
        $topSectionImage = "web-shop-info.png";
        $topSectionAlt = "web-shop-info";
        $bottomSectionImage = "web-shop-package.png";
        $bottomSectionAlt = "web-shop-package";
    @endphp

    <x-title-section-pages :titleEnglish="$titleEnglish" :titleGerman="$titleGerman"></x-title-section-pages>
    <x-top-section-pages
        :topSectionTitleEnglish="$topSectionTitleEnglish" :topSectionTextEnglish="$topSectionTextEnglish" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"
        :topSectionTitleGerman="$topSectionTitleGerman" :topSectionTextGerman="$topSectionTextGerman"
    ></x-top-section-pages>
    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages
        :bottomSectionTitleEnglish="$bottomSectionTitleEnglish" :bottomSectionTextEnglish="$bottomSectionTextEnglish" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"
        :bottomSectionTitleGerman="$bottomSectionTitleGerman" :bottomSectionTextGerman="$bottomSectionTextGerman"
    ></x-bottom-section-pages>
@endsection
