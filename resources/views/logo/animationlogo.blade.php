@extends('layouts.pages')

@section('title', 'Logo Animation')
@section('content')
    @php
        $titleEnglish = "Animate <span class='text-titleBlack'> your </span> logo <span class='text-titleBlack'> to engage </span> your audience";
        $topSectionTitleEnglish = "Move, move, move...";
        $topSectionTextEnglish = "They say that in order to succeed in the business world you need to keep doing only three things – move, move, move! If you are already moving and networking that is awesome but let your logo move as well. If you are not happy with the pace of your movements start with your logo. Let it move! Let it inspire you to move!";
        $bottomSectionTitleEnglish = "Logo animation";
        $bottomSectionTextEnglish = "If you want to refresh your logo without changing its design we have a solution for you – make it move! Whether you like 2D, 3D or motion graphics, our team of graphic wizards will invent creative ways to help your logo to move and create a lot of potential for networking.";

        $titleGerman = "Animieren Sie Ihr Logo um Ihr Publikum zu animieren";
        $topSectionTitleGerman = "Lauf, lauf, lauf...";
        $topSectionTextGerman = "Man sagt, dass Sie nur drei Dinge tun müssen, um in der Geschäftswelt erfolgreich zu sein – sich bewegen, sich bewegen, sich bewegen! Wenn Sie sich bereits bewegen und vernetzen, ist das fantastisch, aber lassen Sie Ihr Logo auch bewegen. Wenn Sie mit dem Tempo Ihrer Bewegungen nicht zufrieden sind, beginnen Sie mit Ihrem Logo. Lass es sich bewegen! Lassen Sie sich inspirieren, sich zu bewegen!";
        $bottomSectionTitleGerman = "Animationslogo";
        $bottomSectionTextGerman = "Wenn Sie Ihr Logo aktualisieren möchten, ohne das Design zu ändern, haben wir eine Lösung für Sie – machen Sie es in Bewegung! Egal, ob Sie 2D-, 3D- oder Motion-Grafiken mögen, unser Team von Grafik-Assistenten erfindet kreative Möglichkeiten, die Ihrem Logo helfen, sich zu bewegen und viel Potenzial für das Networking zu erschliessen.";

        // images alts
        $topSectionImage = "logo-animation-info.gif";
        $topSectionAlt = "logo-animation-info";
        $bottomSectionImage = "logo-animation-package.png";
        $bottomSectionAlt = "logo-animation-package";
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
