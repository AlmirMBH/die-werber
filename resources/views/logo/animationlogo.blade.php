@extends('layouts.app')

@section('content')
    @php
        $title = "Animate <span class='text-titleBlack'> your </span> logo <span class='text-titleBlack'> to engage </span> your audience";
        $topSectionTitle = "Move, move, move...";
        $topSectionText = "They say that in order to succeed in the business world you need to keep doing only three things – move, move, move! If you are already moving and networking that is
        awesome but let your logo move as well. If you are not happy with the pace of your movements start with your logo. Let it move! Let it inspire you to move!";
        $topSectionImage = "logo-animation-info.gif";
        $topSectionAlt = "logo-animation-info";
        $bottomSectionTitle = "Logo animation";
        $bottomSectionText = "If you want to refresh your logo without changing its design we have a solution for you – make it move! Whether you like 2D, 3D or motion graphics, our team of graphic
        wizards will invent creative ways to help your logo to move and create a lot of potential for networking.";
        $bottomSectionImage = "logo-animation-package.png";
        $bottomSectionAlt = "logo-animation-package";
    @endphp

    <x-section-title :title="$title"></x-section-title>
    <x-top-section-pages :topSectionTitle="$topSectionTitle" :topSectionText="$topSectionText" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"></x-top-section-pages>
    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages :bottomSectionTitle="$bottomSectionTitle" :bottomSectionText="$bottomSectionText" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"></x-bottom-section-pages>
@endsection
