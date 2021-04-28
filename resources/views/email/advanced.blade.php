@extends('layouts.app')

@section('title', 'Email Advanced')
@section('content')
    @php
        $title = "Advance <span class='text-titleBlack'> your </span> E-mail marketing <span class='text-titleBlack'> to advance your </span> client basis";
        $topSectionTitle = "Every E-mail takes you one step closer to understanding what your clients like…";
        $topSectionText = "We all know that E-mails are a great means of communication, but we hardly ever think about them as surveys.
        All the E-mails you send to your audience can be your questionnaires that tell you who your audience is and what your clients expect from you.
        And by understanding what your audience wants, you will know what your next step is.";
        $topSectionImage = "email-advanced-info.png";
        $topSectionAlt = "email-advanced-info";
        $bottomSectionTitle = "Advanced";
        $bottomSectionText = "Writing content and placing it in a customized layout with your favorite colors and shapes is what we do best.
        After receiving your emails, your clients will feel as if they finally see the road signs on a difficult road that lead them straight to their destination,
        your brand. The statistical analysis will be available to you within ten working days and you will know exactly which direction towards your success you want
        to take.";
        $bottomSectionImage = "email-advanced-package.png";
        $bottomSectionAlt = "email-advanced-package";
    @endphp

    <x-section-title :title="$title"></x-section-title>
    <x-top-section-pages :topSectionTitle="$topSectionTitle" :topSectionText="$topSectionText" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"></x-top-section-pages>
    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages :bottomSectionTitle="$bottomSectionTitle" :bottomSectionText="$bottomSectionText" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"></x-bottom-section-pages>
@endsection




