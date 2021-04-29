@extends('layouts.app')

@section('title', 'Email Starter')
@section('content')
    @php
        $title = "Get a starter pack<span class='text-titleBlack'> to get started building your </span> brand";
        $topSectionTitle = "Wrap your messages in a colorful email paper…";
        $topSectionText = "E-mail has the potential that other channels do not. A selected list of clients who want exactly what you are offering is better than a
        big list of random addresses. Let us help you pack your content into unique layouts with your logo and send it to your list of selected clients.";
        $topSectionImage = "email-starter-info.png";
        $topSectionAlt = "email-starter-info";
        $bottomSectionTitle = "Starter";
        $bottomSectionText = "We place your content in our layout, add your logo and send it to the clients by your choice. The statistical analysis will be
        available to you within ten working days. It will provide you with a better insight into what your clients like or dislike and you can keep modifying
        your campaigns until you perfect your advertising model.";
        $bottomSectionImage = "email-starter-package.png";
        $bottomSectionAlt = "email-starter-package";
    @endphp

    <x-title-section-pages :title="$title"></x-title-section-pages>
    <x-top-section-pages :topSectionTitle="$topSectionTitle" :topSectionText="$topSectionText" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"></x-top-section-pages>
    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages :bottomSectionTitle="$bottomSectionTitle" :bottomSectionText="$bottomSectionText" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"></x-bottom-section-pages>
@endsection
