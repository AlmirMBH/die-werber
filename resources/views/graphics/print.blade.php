@extends('layouts.pages')

@section('title', 'Print')
@section('content')
    @php
        $titleEnglish = "Print <span class='text-titleBlack'> your </span> materials <span class='text-titleBlack'> to print your </span> ticket to the business world";
        $topSectionTitleEnglish = "Let your posters, brochures and flyers carry your message to the remotest regions of the business world";
        $topSectionTextEnglish = "Reaching your clients is not always easy, but managing the content that conveys the right message while reaching your clients could be a piece of cake. Let us help you make sure that your brochures, flyers and posters convey the best design and quality message in the printing world.";
        $bottomSectionTitleEnglish = "Print materials";
        $bottomSectionTextEnglish = "As the old saying goes, “If you want something done right, you have to let Die Werber do it”. Years of experience make us capable of converting your ideas into promo miracles. Let our team of printing maestros help you achieve recognition and secure a long-lasting place in the memory of your clients.";

        $titleGerman = "German title";
        $topSectionTitleGerman = "German top title";
        $topSectionTextGerman = "German top section text";
        $bottomSectionTitleGerman = "German bottom section title";
        $bottomSectionTextGerman = "German bottom section text";

        // images and alts
        $topSectionImage = "graphic-print-info.png";
        $topSectionAlt = "graphic-print-info";
        $bottomSectionImage = "graphic-print-package.png";
        $bottomSectionAlt = "graphic-print-package";
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
