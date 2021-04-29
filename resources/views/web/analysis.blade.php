@extends('layouts.app')

@section('title', 'Analysis')
@section('content')
    @php
        $title = "Let us analyze your website <span class='text-titleBlack'> FREE OF CHARGE </span>";
    @endphp

    <x-title-section-pages :title="$title"></x-title-section-pages>
@endsection
