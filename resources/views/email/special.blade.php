@extends('layouts.pages')

@section('title', 'Email Special')
@section('content')
    @php
        $titleEnglish = "Successful brands <span class='text-titleBlack'>send</span> special E-mails";
        $topSectionTitleEnglish = "Bit by bit and you get a great brand…";
        $topSectionTextEnglish = "Majority of great brands have a common characteristic, special E-mails. Their content, layout, web version, multiple languages is what actually makes their E-mails so special. We know that creating an outstanding E-mail or newsletter can sometimes be a difficult task and that is why our team is always there for you. Let us help you send some of the most attractive and eye-catching emails in your branch.";
        $bottomSectionTitleEnglish = "Special";
        $bottomSectionTextEnglish = "Let us help you write your content in multiple languages and place it in a customized layout with your favorite colors and shapes. The design of the web version of your newsletter will satisfy the taste of the most demanding clients. In addition to your E-mailing list, we will provide you with our own, and after we send your content to the clients, the statistical analysis will be available to you within ten working days.";

        $titleGerman = "Erfolgreiche Marken verschicken besondere E-Mails";
        $topSectionTitleGerman = "Stück für Stück und du bekommst eine grossartige Marke…";
        $topSectionTextGerman = "Die Mehrheit der grossen Marken hat ein gemeinsames Merkmal, spezielle E-Mails. Der Inhalt, das Layout, die Webversion und mehrere Sprachen machen die E-Mails zu etwas Besonderem. Wir wissen, dass es manchmal schwierig sein kann, eine hervorragende E-Mail oder einen Newsletter zu erstellen. Deshalb ist unser Team immer für Sie da. Lassen Sie uns Ihnen helfen, einige der attraktivsten und auffälligsten E-Mails in Ihrer Branche zu versenden.";
        $bottomSectionTitleGerman = "Special";
        $bottomSectionTextGerman = "Wir helfen Ihnen dabei, Ihre Inhalte in mehreren Sprachen zu verfassen und in einem benutzerdefinierten Layout mit Ihren bevorzugten Farben und Formen zu platzieren. Das Design der Webversion Ihres Newsletters wird den Geschmack der anspruchsvollsten Kunden befriedigen. Zusätzlich zu Ihrer E-Mail-Liste stellen wir Ihnen unsere eigene Liste zur Verfügung. Nachdem wir Ihre Inhalte an die Kunden gesendet haben, steht Ihnen die statistische Analyse innerhalb von zehn Arbeitstagen zur Verfügung.";

        // images and alts
        $topSectionImage = "email-special-info.png";
        $topSectionAlt = "email-special-info";
        $bottomSectionImage = "email-special-package.png";
        $bottomSectionAlt = "email-special-package";
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
