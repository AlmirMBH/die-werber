@extends('layouts.app')

@section('content')
    @php
        $title = "Print <span class='text-titleBlack'> your </span> materials <span class='text-titleBlack'> to print your </span> ticket to the business world";
        $topSectionTitle = "Let your posters, brochures and flyers carry your message to the remotest regions of the business world";
        $topSectionText = "Reaching your clients is not always easy, but managing the content that conveys the right message while reaching your clients could be a
        piece of cake. Let us help you make sure that your brochures, flyers and posters convey the best design and quality message in the printing world.";
        $topSectionImage = "graphic-print-info.png";
        $topSectionAlt = "graphic-print-info";
        $bottomSectionTitle = "Print materials";
        $bottomSectionText = "As the old saying goes, “If you want something done right, you have to let Die Werber do it”. Years of experience make us capable
        of converting your ideas into promo miracles. Let our team of printing maestros help you achieve recognition and secure a long-lasting place in the
        memory of your clients.";
        $bottomSectionImage = "graphic-print-package.png";
        $bottomSectionAlt = "graphic-print-package";
    @endphp

    <x-section-title :title="$title"></x-section-title>
    <x-top-section-pages :topSectionTitle="$topSectionTitle" :topSectionText="$topSectionText" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"></x-top-section-pages>
    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages :bottomSectionTitle="$bottomSectionTitle" :bottomSectionText="$bottomSectionText" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"></x-bottom-section-pages>
@endsection
