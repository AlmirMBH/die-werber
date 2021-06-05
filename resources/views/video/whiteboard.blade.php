@extends('layouts.pages')

@section('title', 'Whiteboard')
@section('content')
    @php
        $titleEnglish = "Draw <span class='text-titleBlack'> your </span> business processes <span class='text-titleBlack'>to draw your</span> way to new clients";
        $topSectionTitleEnglish = "Draw what your brand does and keep the curiosity of your audience alive!";
        $topSectionTextEnglish = "Drawing and illustrating your business processes will make your brand lively again. Every stage of your business process, from your idea and research to the final product, has the potential to cast a different light on what you do and what you provide your clients with. Help your audience to become aware of what you can do for them.";
        $bottomSectionTitleEnglish = "Whiteboard Drawings";
        $bottomSectionTextEnglish = "It takes only a split second for people to decide if they will watch the rest of your video or not. Making your story natural part of your brand can be your advertising game changer and adding a little bit of humor and variety will help your video stand out among many others.";

        $titleGerman = "Zeichnen Sie Ihre Geschäftsprozesse, um Ihren Weg zu neuen Kunden zu finden";
        $topSectionTitleGerman = "Zeichnen Sie, was Ihre Marke tut, und halten Sie die Neugier Ihres Publikums am Leben!";
        $topSectionTextGerman = "Durch das Zeichnen und Illustrieren Ihrer Geschäftsprozesse wird Ihre Marke wieder lebendig. Jede Phase Ihres Geschäftsprozesses, von Ihrer Idee und Forschung bis zum Endprodukt, hat das Potenzial, ein anderes Licht darauf zu werfen, was Sie tun und was Sie Ihren Kunden bieten. Helfen Sie Ihrem Publikum, sich dessen bewusst zu werden, was Sie für sie tun können.";
        $bottomSectionTitleGerman = "Whiteboardzeichnungen";
        $bottomSectionTextGerman = "Es dauert nur einen Sekundenbruchteil, bis die Nutzer entschieden haben, ob sie den Rest Ihres Videos sehen wollen oder nicht. Indem Sie Ihre Geschichte zu einem natürlichen Bestandteil Ihrer Marke machen, können Sie Ihr Werbespiel verändern, und wenn Sie ein wenig Humor und Abwechslung hinzufügen, können Sie Ihr Video von vielen anderen abheben.";

        // images and alts
        $topSectionImage = "video-whiteboard-info.png";
        $topSectionAlt = "video-whiteboard-info";
        $bottomSectionImage = "video-whiteboard-package.png";
        $bottomSectionAlt = "video-whiteboard-package";
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
