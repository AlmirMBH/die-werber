@extends('layouts.pages')

@section('title', 'Web Design')
@section('content')
    @php
        $titleEnglish = "Design <span class='text-titleBlack'> your web content to design your </span> business opportunities";
        $topSectionTitleEnglish = "Ready for web magic?";
        $topSectionTextEnglish = "Our work is product of our passion, smart planning and extraordinary personal commitment. The craziest webdesign has been winning over our clients’ sympathies over and over again. Set off on a lively journey and find out why…";
        $bottomSectionTitleEnglish = "Web Design";
        $bottomSectionTextEnglish = "Whether you need a simple static page or complex web-based internet applications and e-commerce we are the best and most cost-efficient option for you.";

        $titleGerman = "Gestalten Sie Ihre Website und Inhalte, um Ihre Geschäftsmöglichkeiten zu gestalten";
        $topSectionTitleGerman = "Bereit für Webmagie?";
        $topSectionTextGerman = "Unsere Arbeit ist das Ergebnis unserer Leidenschaft, klugen Planung und aussergewöhnlichen persönlichen Engagements. Das verrückteste Webdesign hat die Sympathien unserer Kunden immer wieder gewonnen. Begeben Sie sich auf eine lebhafte Reise und erfahren Sie, warum…";
        $bottomSectionTitleGerman = "Webdesign";
        $bottomSectionTextGerman = "Ob Sie eine einfache statische Seite, komplexe webbasierte Internetanwendung oder E-Commerce benötigen, wir sind die beste und kostengünstigste Option für Sie.";

        // images and alts
        $topSectionImage = "web-design-info.png";
        $topSectionAlt = "web-design-info";
        $bottomSectionImage = "web-design-package.png";
        $bottomSectionAlt = "web-design-package";
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
