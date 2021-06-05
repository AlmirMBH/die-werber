@extends('layouts.pages')

@section('title', 'Graphic Design')
@section('content')
    @php
        $titleEnglish = "Design <span class='text-titleBlack'> your </span> content <span class='text-titleBlack'> to design your </span> business <br> opportunities";
        $topSectionTitleEnglish = "Your graphic content is the most sincere intermediary between you and your client!";
        $topSectionTextEnglish = "As the old saying goes, “Actions speak louder than words”. Let us combine your messages with photos, illustrations and drawings and make them speak louder than your words. Let them leave a memorable impression on your clients. An irresistible impression that turns incorrigible phlegamtics into curios explorers.";
        $bottomSectionTitleEnglish = "Graphic Design";
        $bottomSectionTextEnglish = "Modern promo materials have always been in and unique graphic solutions are the first thing that attracts attention. Let our team of graphic grand masters pack your vision and values into your visual identity and assist you in attracting the attention of your clients and  competitors.";

        $titleGerman = "German title";
        $topSectionTitleGerman = "German top title";
        $topSectionTextGerman = "German top section text";
        $bottomSectionTitleGerman = "German bottom section title";
        $bottomSectionTextGerman = "German bottom section text";

        // images and alts
        $topSectionImage = "graphic-design-info.png";
        $topSectionAlt = "graphic-design-info";
        $bottomSectionImage = "graphic-design-package.png";
        $bottomSectionAlt = "graphic-design-package";
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
