@extends('layouts.pages')

@section('title', 'Prices')
@section('content')
    @php
        $titleEnglish = "Prices";
        $titleGerman = "Preise";
    @endphp

    <x-title-section-pages :titleEnglish="$titleEnglish" :titleGerman="$titleGerman"></x-title-section-pages>
@endsection
