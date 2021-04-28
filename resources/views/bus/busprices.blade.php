@extends('layouts.app')

@section('title', 'Bus')
@section('content')
    @php
        $title = "Prices";
    @endphp

    <x-section-title :title="$title"></x-section-title>
@endsection
