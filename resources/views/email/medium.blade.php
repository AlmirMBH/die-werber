@extends('layouts.pages')

@section('title', 'Email Medium')
@section('content')
    @php
        $titleEnglish = "Customize <span class='text-titleBlack'> your content to customize</span>  your clients' preferences";
        $topSectionTitleEnglish = "Let your audience know what you do…";
        $topSectionTextEnglish = "Getting the right message to the right audience is not easy, and there is no such thing as a perfect email but authentic and relevant messages definitely work. Provide your audience with a preview of your content, make them the hero of your story, and let them sign up for your brand, not for your email.";
        $bottomSectionTitleEnglish = "Medium";
        $bottomSectionTextEnglish = "Let us help you write your content and place it in our layout with your logo. After we send it to your clients, the statistical analysis will be available to you within ten working days. You will know exactly what your clients like or dislike and you can keep improving your campaigns until you perfect them.";

        $titleGerman = "Passen Sie Ihre Inhalte an, um die Vorlieben Ihrer Kunden anzupassen";
        $topSectionTitleGerman = "Lassen Sie Ihr Publikum wissen, was Sie tun…";
        $topSectionTextGerman = "Es ist nicht einfach, die richtige Nachricht an das richtige Publikum zu richten, und es gibt keine perfekte E-Mail. Aber authentische und relevante Nachrichten funktionieren auf jeden Fall. Bieten Sie Ihrem Publikum eine Vorschau Ihrer Inhalte, machen Sie es zum Helden Ihrer Geschichte und lassen Sie es sich für Ihre Marke anmelden, nicht für Ihre E-Mail.";
        $bottomSectionTitleGerman = "Medium";
        $bottomSectionTextGerman = "Wir helfen Ihnen beim Schreiben Ihrer Inhalte und platzieren diese mit Ihrem Logo in unserem Layout. Nach dem Versand an Ihre Kunden steht Ihnen die statistische Auswertung innerhalb von zehn Arbeitstagen zur Verfügung. Sie wissen genau, was Ihre Kunden mögen oder nicht mögen, und können Ihre Kampagnen so lange verbessern, bis Sie sie perfektionieren.";

        // images and alts
        $topSectionImage = "email-medium-info.png";
        $topSectionAlt = "email-medium-info";
        $bottomSectionImage = "email-medium-package.png";
        $bottomSectionAlt = "email-medium-package";
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
