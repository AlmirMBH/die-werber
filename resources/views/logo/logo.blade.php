@extends('layouts.pages')

@section('title', 'Logo Design')
@section('content')
    @php
        $titleEnglish = "Let <span class='text-titleBlack'> your </span> logo tell <span class='text-titleBlack'> the right <span class='text-titleRed'>story</span> about you </span>";
        $topSectionTitleEnglish = "Let us create something unique - your logo!";
        $topSectionTextEnglish = "Let us help you become a recognizable member of your business branch. Tell us about your corporate colors, values and vision and we will design a meaningful logo for your business. A logo that reflects who you are and what you stand for.";
        $bottomSectionTitleEnglish = "Logo Design";
        $bottomSectionTextEnglish = "We are a creative team ready to do outstanding work for your brand and teamwork is our most powerful weapon. We follow the latest trends and turn your ideas into reality. Your deadline is our priority.";

        $titleGerman = "Lassen Sie Ihr Logo die richtige Geschichte über Sie erzählen";
        $topSectionTitleGerman = "Lassen Sie uns etwas Einzigartiges schaffen – Ihr Logo!";
        $topSectionTextGerman = "Wir helfen Ihnen dabei, ein erkennbares Mitglied Ihrer Branche zu werden. Teilen Sie uns Ihre Unternehmensfarben, -werte und -visionen mit und wir erstellen ein aussagekräftiges Logo für Ihr Unternehmen. Ein Logo, das widerspiegelt, wer Sie sind und wofür Sie stehen.";
        $bottomSectionTitleGerman = "Logo-design";
        $bottomSectionTextGerman = "Wir sind ein kreatives Team, das bereit ist, herausragende Arbeit für Ihre Marke zu leisten. Teamwork ist unsere stärkste Waffe. Wir folgen den neuesten Trends und setzen Ihre Ideen in die Realität um. Ihre Frist ist unsere Priorität.";

        // images and alts
        $topSectionImage = "logo-design-info.png";
        $topSectionAlt = "logo-design-info";
        $bottomSectionImage = "logo-design-package.png";
        $bottomSectionAlt = "logo-design-package";
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
