@extends('layouts.pages')

@section('title', 'Visual Identity')
@section('content')
    @php
        $titleEnglish = "Perfect <span class='text-titleBlack'> your </span> visual <span class='text-titleBlack'> identity <span class='text-titleRed'>to perfect</span> your </span> business performance";
        $topSectionTitleEnglish = "Imagine your logo on your favorite team's bleachers!";
        $topSectionTextEnglish = "Have you ever wondered how your logo would look like on specific promo materials, fair stands or bleachers while your favorite team is playing? There is an easy way to find it out. Let us design your visual identity guidelines and help you conceptualize all the possible ways to utilize your brand identity to advance your business performance.";
        $bottomSectionTitleEnglish = "Visual Identity";
        $bottomSectionTextEnglish = "By defining visual identity of your brand you actually define the way you do business. Powerful businesses have powerful visual identity that brings about many benefits such as recognition and access to markets they would not otherwise be able to reach. Give your business a chance to become powerful. Let us design visual identity guidelines for your business.";

        $titleGerman = "German title";
        $topSectionTitleGerman = "German top title";
        $topSectionTextGerman = "German top section text";
        $bottomSectionTitleGerman = "German bottom section title";
        $bottomSectionTextGerman = "German bottom section text";

        // images and alts
        $topSectionImage = "visual-identity-info.png";
        $topSectionAlt = "visual-identity-info";
        $bottomSectionImage = "visual-identity-package.png";
        $bottomSectionAlt = "visual-identity-package";
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
