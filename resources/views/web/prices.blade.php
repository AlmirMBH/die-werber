@extends('layouts.pages')

@section('title', 'Prices')
@section('content')
    @php
        $title = "Prices";
    @endphp

    <x-title-section-pages :title="$title"></x-title-section-pages>
@endsection
