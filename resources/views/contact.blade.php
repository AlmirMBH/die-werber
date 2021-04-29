@extends('layouts.app')

@section('title', 'Contact')
@section('content')
    @php
        $title = "<span class='text-titleBlack'> Get in </span> touch <span>";
    @endphp
    <x-title-section-pages :title="$title"></x-title-section-pages>

    <div class="contact-text font-nunito text-paragraphGray text-center text-xl text-bold md:w-1/3 mx-auto">
        <p>If you have a question or would like to work with us send an e-mail to: <a href="mailto:info@die-werber.ch">info@die-werber.ch</a> or fill out the form below</p>
    </div>

@endsection
