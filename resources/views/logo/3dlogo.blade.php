@extends('layouts.pages')

@section('title', '3D Logo')
@section('content')
    @php
        $title = "Improve <span class='text-titleBlack'> your </span> logo <span class='text-titleBlack'>to improve your</span> recognition";
        $topSectionTitle = "Engaging, attractive, eye-catching and inspiring - your 3D logo";
        $topSectionText = "Your logo rocks, but your 3D logo would rock even more. Enhancing the attractiveness of your logo to attract clients is always a cool
        idea. Your new 3D logo could launch your brand into the new business orbit and help you avoid being similar to other brands that do not rock good enough.";
        $topSectionImage = "logo-3d-info.png";
        $topSectionAlt = "logo-3d-info";
        $bottomSectionTitle = "3D Logo";
        $bottomSectionText = "Living in a 2D world is no longer the only option for contemporary businesses. Although it might be funny, it is narrow, bordered by
        pretty strict lines, and somewhat empty. Free your logo and give it another dimension for a better experience of your brand.  It is simple, go 3D and let
        your brand live outside the 2D box. Your business deserves it.";
        $bottomSectionImage = "logo-3d-package.png";
        $bottomSectionAlt = "logo-3d-package";
    @endphp

    <x-title-section-pages :title="$title"></x-title-section-pages>
    <x-top-section-pages :topSectionTitle="$topSectionTitle" :topSectionText="$topSectionText" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"></x-top-section-pages>
    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages :bottomSectionTitle="$bottomSectionTitle" :bottomSectionText="$bottomSectionText" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"></x-bottom-section-pages>
@endsection
