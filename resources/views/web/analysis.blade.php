@extends('layouts.app')

@section('content')
    @php
        $title = "Let us analyze your website <span class='text-titleBlack'> FREE OF CHARGE </span>";
    @endphp

    <x-section-title :title="$title"></x-section-title>
@endsection
