@extends('layouts.pages')

@section('title', 'Print')
@section('content')
    @php
        $titleEnglish = "Print <span class='text-titleBlack'> your </span> materials <span class='text-titleBlack'> to print your </span> ticket to the business world";
        $topSectionTitleEnglish = "Let your posters, brochures and flyers carry your message to the remotest regions of the business world";
        $topSectionTextEnglish = "Reaching your clients is not always easy, but managing the content that conveys the right message while reaching your clients could be a piece of cake. Let us help you make sure that your brochures, flyers and posters convey the best design and quality message in the printing world.";
        $bottomSectionTitleEnglish = "Print materials";
        $bottomSectionTextEnglish = "As the old saying goes, “If you want something done right, you have to let Die Werber do it”. Years of experience make us capable of converting your ideas into promo miracles. Let our team of printing maestros help you achieve recognition and secure a long-lasting place in the memory of your clients.";

        $titleGerman = "Drucken Sie Ihre Materialien aus, um Ihr Ticket für die Geschäftswelt auszudrucken";
        $topSectionTitleGerman = "Lassen Sie Ihre Plakate, Broschüren und Flyer Ihre Botschaft in die entlegensten Regionen der Geschäftswelt tragen";
        $topSectionTextGerman = "Es ist nicht immer einfach, Ihre Kunden zu erreichen, aber die Verwaltung der Inhalte, die die richtige Botschaft vermitteln, während Sie Ihre Kunden erreichen, könnte ein Kinderspiel sein. Wir helfen Ihnen dabei, sicherzustellen, dass Ihre Broschüren, Flyer und Poster die beste Design- und Qualitätsbotschaft in der Druckwelt vermitteln.";
        $bottomSectionTitleGerman = "Druckmaterialien";
        $bottomSectionTextGerman = "Wie das alte Sprichwort sagt: “Wenn du etwas richtig machen willst, musst du es Die Werber tun lassen”. Durch jahrelange Erfahrung sind wir in der Lage, Ihre Ideen in Werbewunder umzusetzen. Lassen Sie sich von unserem Team von Druckmaestros zu Wiedererkennungswerten verhelfen und sichern Sie sich einen dauerhaften Platz im Gedächtnis Ihrer Kunden.";

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
