@extends('layouts.pages')

@section('title', '2D Animations')
@section('content')
    @php
        $titleEnglish = "Animate <span class='text-titleBlack'> your video content to animate </span> your clients";
        $topSectionTitleEnglish = "Animated content grabs attention!";
        $topSectionTextEnglish = "Video content has a lot of potential to attract attention of your audience and investing a little bit more effort can help your video to go viral. Let us help your brand become a smash hit and get the place in your branch it deserves.";
        $bottomSectionTitleEnglish = "2D Animations";
        $bottomSectionTextEnglish = "The world of animations opens the door to an avenue of opportunities for your business, and your favorite character can even become a member of your team in it. Let the world see the funniest version of your brand and connect with you on a new level?";

        $titleGerman = "Animieren Sie Ihren Videocontent, um Ihre Kunden zu animieren";
        $topSectionTitleGerman = "Animierte Inhalte sorgen für Aufmerksamkeit!";
        $topSectionTextGerman = "Video-Content kann die Aufmerksamkeit Ihres Publikums auf sich ziehen, und ein wenig mehr Aufwand kann dazu beitragen, dass Ihr Video viral wird. Lassen Sie uns Ihrer Marke helfen, ein Hit zu werden und den Platz in Ihrer Branche zu bekommen, den sie verdient.";
        $bottomSectionTitleGerman = "2D Animation";
        $bottomSectionTextGerman = "Die Welt der Animation eröffnet Ihrem Unternehmen neue Möglichkeiten, und Ihr Lieblingscharakter kann sogar Mitglied Ihres Teams werden. Lassen Sie die Welt die witzigste Version Ihrer Marke sehen und sich mit Ihnen auf einer neuen Ebene verbinden?";

        // images and alts
        $topSectionImage = "video-2d-info.gif";
        $topSectionAlt = "video-2d-info";
        $bottomSectionImage = "video-2d-package.png";
        $bottomSectionAlt = "video-2d-package";
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
