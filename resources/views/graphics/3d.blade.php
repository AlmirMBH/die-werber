@extends('layouts.pages')

@section('title', '3D Modeling')
@section('content')
    @php
        $titleEnglish = "Model <span class='text-titleBlack'> your </span> content <span class='text-titleBlack'> to model </span> your public image";
        $topSectionTitleEnglish = "Visualize your project months ahead of its deadline";
        $topSectionTextEnglish = "You want to organize an event or manufacture a product but you are not sure if that is a good idea? Why would you not see your event before you even organized it or your product before you started producing it? We can convert your ideas into reality and let you take a look at the most intricate details of your event or product.";
        $bottomSectionTitleEnglish = "3D Modeling";
        $bottomSectionTextEnglish = "Are you constructing buildings, organizing parties or decorating offices? You do not have to be concerned about it any more. Let us help you visualize your projects months ahead of their deadlines. Our 3D models will provide you with the opportunity to make all the changes to your projects before you even start implementing them.";

        $titleGerman = "Modellieren Sie Ihre Inhalte, um Ihr öffentliches Image zu modellieren";
        $topSectionTitleGerman = "Visualisieren Sie Ihre Projekt-Monate vor dem Abgabetermin";
        $topSectionTextGerman = "Sie möchten eine Veranstaltung organisieren oder ein Produkt herstellen, sind sich aber nicht sicher, ob das eine gute Idee ist? Warum würden Sie Ihre Veranstaltung nicht sehen, bevor Sie sie überhaupt organisiert haben, oder Ihr Produkt, bevor Sie mit der Produktion begonnen haben? Wir können Ihre Ideen in die Realität umsetzen und Sie auf die kompliziertesten Details Ihrer Veranstaltung oder Ihres Produkts aufmerksam machen.";
        $bottomSectionTitleGerman = "3D-Modellierung";
        $bottomSectionTextGerman = "Bauen Sie Gebäude, organisieren Partys oder dekorieren Sie Büros? Sie müssen sich nicht mehr darum kümmern. Lassen Sie sich von uns helfen, Ihre Projekte Monate vor dem geplanten Termin zu visualisieren. Unsere 3D-Modelle bieten Ihnen die Möglichkeit, alle Änderungen an Ihren Projekten vorzunehmen, bevor Sie mit der Implementierung beginnen.";

        // images and alts
        $topSectionImage = "graphic-design-3d-info.png";
        $topSectionAlt = "graphic-design-3d-info";
        $bottomSectionImage = "graphic-design-3d-package.png";
        $bottomSectionAlt = "graphic-design-3d-package";
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
