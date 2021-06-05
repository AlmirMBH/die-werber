@extends('layouts.pages')

@section('title', 'Email Advanced')
@section('content')
    @php
        $titleEnglish = "Advance <span class='text-titleBlack'> your </span> E-mail marketing <span class='text-titleBlack'> to advance your </span> client basis";
        $topSectionTitleEnglish = "Every E-mail takes you one step closer to understanding what your clients like…";
        $topSectionTextEnglish = "We all know that E-mails are a great means of communication, but we hardly ever think about them as surveys. All the E-mails you send to your audience can be your questionnaires that tell you who your audience is and what your clients expect from you. And by understanding what your audience wants, you will know what your next step is.";
        $bottomSectionTitleEnglish = "Advanced";
        $bottomSectionTextEnglish = "Writing content and placing it in a customized layout with your favorite colors and shapes is what we do best. After receiving your emails, your clients will feel as if they finally see the road signs on a difficult road that lead them straight to their destination, your brand. The statistical analysis will be available to you within ten working days and you will know exactly which direction towards your success you want to take.";

        $titleGerman = "Title German";
        $topSectionTitleGerman = "Top section title German";
        $topSectionTextGerman = "Top section text German";
        $bottomSectionTitleGerman = "Bottom section title German";
        $bottomSectionTextGerman = "Bottom section text German";

        // images and alts
        $topSectionImage = "email-advanced-info.png";
        $topSectionAlt = "email-advanced-info";
        $bottomSectionImage = "email-advanced-package.png";
        $bottomSectionAlt = "email-advanced-package";
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




