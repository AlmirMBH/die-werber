@extends('layouts.app')

@section('title', 'Bus')
@section('content')
    @php
        $title = "Prices";
    @endphp

    <x-title-section-pages :title="$title"></x-title-section-pages>
@endsection
