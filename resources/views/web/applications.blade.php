@extends('layouts.app')

@section('content')
    @php
        $title = "Develop <span class='text-titleBlack'> your Web Application to develop your </span> business";
        $topSectionTitle = "We will help you to reach your business goals!";
        $topSectionText = "Digitalizing your business processes can make your company or organization more lively and enjoyable to your employees. Repetitive or
        complex tasks that require a lot of time and energy to complete can certainly be simplified. Let us find the right solution for you.";
        $topSectionImage = "web-applications-info.png";
        $topSectionAlt = "web-applications-info";
        $bottomSectionTitle = "Web Aplications";
        $bottomSectionText = "We are dedicated to delivering the best services to our clients. If you need a web app or a customized piece of software, contact us and
        we will get you the best one.  Let us help you reach the excellence in your business processes and inspire you to become a leader in what you do.";
        $bottomSectionImage = "web-applications-package.png";
        $bottomSectionAlt = "web-applications-package";
    @endphp

    <x-section-title :title="$title"></x-section-title>
    <x-top-section-pages :topSectionTitle="$topSectionTitle" :topSectionText="$topSectionText" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"></x-top-section-pages>
    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages :bottomSectionTitle="$bottomSectionTitle" :bottomSectionText="$bottomSectionText" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"></x-bottom-section-pages>
@endsection
