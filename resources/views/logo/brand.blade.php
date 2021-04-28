@extends('layouts.app')

@section('content')
    @php
        $title = "Perfect <span class='text-titleBlack'> your </span> visual <span class='text-titleBlack'> identity <span class='text-titleRed'>to perfect</span> your </span> business performance";
        $topSectionTitle = "Imagine your logo on your favorite team's bleachers!";
        $topSectionText = "Have you ever wondered how your logo would look like on specific promo materials, fair stands or bleachers while your favorite team is playing? There is an easy way to find
        it out. Let us design your visual identity guidelines and help you conceptualize all the possible ways to utilize your brand identity to advance your business performance.";
        $topSectionImage = "visual-identity-info.png";
        $topSectionAlt = "visual-identity-info";
        $bottomSectionTitle = "Visual Identity";
        $bottomSectionText = "By defining visual identity of your brand you actually define the way you do business. Powerful businesses have powerful visual identity that brings about many benefits
        such as recognition and access to markets they would not otherwise be able to reach. Give your business a chance to become powerful. Let us design visual identity guidelines for your business.";
        $bottomSectionImage = "visual-identity-package.png";
        $bottomSectionAlt = "visual-identity-package";
    @endphp

    <x-section-title :title="$title"></x-section-title>
    <x-top-section-pages :topSectionTitle="$topSectionTitle" :topSectionText="$topSectionText" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"></x-top-section-pages>
    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages :bottomSectionTitle="$bottomSectionTitle" :bottomSectionText="$bottomSectionText" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"></x-bottom-section-pages>
@endsection
