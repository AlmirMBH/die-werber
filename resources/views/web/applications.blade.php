@extends('layouts.pages')

@section('title', 'Web Applications')
@section('content')
    @php
        $titleEnglish = "Develop <span class='text-titleBlack'> your Web Application to develop your </span> business";
        $topSectionTitleEnglish = "We will help you to reach your business goals!";
        $topSectionTextEnglish = "Digitalizing your business processes can make your company or organization more lively and enjoyable to your employees. Repetitive or complex tasks that require a lot of time and energy to complete can certainly be simplified. Let us find the right solution for you.";
        $bottomSectionTitleEnglish = "Web Aplications";
        $bottomSectionTextEnglish = "We are dedicated to delivering the best services to our clients. If you need a web app or a customized piece of software, contact us and we will get you the best one.  Let us help you reach the excellence in your business processes and inspire you to become a leader in what you do.";

        $titleGerman = "Entwerfen Sie Ihre Web Applikation, um Ihre Geschäft zu entwerfen";
        $topSectionTitleGerman = "Wir helfen Ihnen, Ihre Geschäftsziele zu erreichen!";
        $topSectionTextGerman = "Die Digitalisierung Ihrer Geschäftsprozesse kann Ihr Unternehmen oder Ihre Organisation für Ihre Mitarbeiter lebendiger und angenehmer machen. Wiederholte oder komplexe Aufgaben, die viel Zeit und Energie erfordern, können sicherlich vereinfacht werden. Lassen Sie uns gemeinsam eine Lösung finden.";
        $bottomSectionTitleGerman = "Web Applikation";
        $bottomSectionTextGerman = "Wir sind bestrebt, unseren Kunden die besten Dienstleistungen zu bieten. Wenn Sie eine Web Applikation oder eine angepasste Software benötigen, kontaktieren Sie uns und wir werden Ihnen die beste Lösung anbieten. Lassen Sie uns Ihnen helfen, die Exzellenz in Ihren Geschäftsprozessen zu erreichen und Sie zu inspirieren, um ein Führer in dem zu werden, was Sie tun.";

        // images and alts
        $topSectionImage = "web-applications-info.png";
        $topSectionAlt = "web-applications-info";
        $bottomSectionImage = "web-applications-package.png";
        $bottomSectionAlt = "web-applications-package";
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
