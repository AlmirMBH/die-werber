@extends('layouts.pages')

@section('title', 'Logo Animation')
@section('content')
    @php
        $titleEnglish = "Animate <span class='text-titleBlack'> your </span> logo <span class='text-titleBlack'> to engage </span> your audience";
        $topSectionTitleEnglish = "Move, move, move...";
        $topSectionTextEnglish = "They say that in order to succeed in the business world you need to keep doing only three things – move, move, move! If you are already moving and networking that is awesome but let your logo move as well. If you are not happy with the pace of your movements start with your logo. Let it move! Let it inspire you to move!";
        $bottomSectionTitleEnglish = "Logo animation";
        $bottomSectionTextEnglish = "If you want to refresh your logo without changing its design we have a solution for you – make it move! Whether you like 2D, 3D or motion graphics, our team of graphic wizards will invent creative ways to help your logo to move and create a lot of potential for networking.";

        $titleGerman = "German title";
        $topSectionTitleGerman = "German top title";
        $topSectionTextGerman = "German top section text";
        $bottomSectionTitleGerman = "German bottom section title";
        $bottomSectionTextGerman = "German bottom section text";

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
