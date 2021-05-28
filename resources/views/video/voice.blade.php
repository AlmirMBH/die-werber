@extends('layouts.pages')

@section('title', 'Voice Test')
@section('content')
    @php
        $title = "Your business voice <span class='text-titleBlack'> is the reflection of </span> your own voice";
        $topSectionTitle = "Let us help you outvoice the voices of your competition...";
        $topSectionText = "Clear, understandable and pleasant voice should be part of the personality of every company. The right voice makes your messages
        more interesting and appealing to your clients. It helps them understand your business and engage with your brand.";
        $topSectionImage = "video-voice-info.png";
        $topSectionAlt = "video-voice-info";
        $bottomSectionTitle = "Voice Test";
        $bottomSectionText = "The louder your voice is, the more it resonates with your clients. Your voice embodies your vision and helps you grow your audience.
        Let us give your business a booming voice that shatters the glasses and market boundaries to your audience.";
        $bottomSectionImage = "video-voice-package.png";
        $bottomSectionAlt = "video-voice-package";
    @endphp

    <x-title-section-pages :title="$title"></x-title-section-pages>
    <x-top-section-pages :topSectionTitle="$topSectionTitle" :topSectionText="$topSectionText" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"></x-top-section-pages>

    <section>
        <div class="mx-auto flex flex-row max-w-6xl mb-6 mt-12 px-2">
            <div class="flex-1">
                <p class="text-3xl md:text-4xl text-titleRed font-semibold mb-5">Anna – “Hochdeutsch”</p>
                <audio class="min-w-full" controls>
                  <source src="{{asset('audio/Anna-Hochdeutsch-voice-sample.mp3')}}" type="audio/mpeg">
                Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        <div class="mx-auto flex flex-row max-w-6xl mt-12 mb-6 px-2">
            <div class="flex-1">
                <p class="text-3xl md:text-4xl  text-titleRed font-semibold mb-5">Mathias – “Schweizerdeutsch”</p>
                <audio class="min-w-full" controls>
                 <source src="{{asset('audio/Mathias–Schweizerdeutsch-voice-sample.wav')}}" type="audio/wav">
                Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        <div class="mx-auto flex flex-row max-w-6xl mb-6 px-2">
            <div class="flex-1">
                <p class="text-3xl md:text-4xl text-titleRed font-semibold mb-5">Dominik – “Hochdeutsch”</p>
                <audio class="min-w-full" controls>
                  <source src="{{asset('audio/Dominik-Hochdeutsch-voice-sample.mp3')}}" type="audio/mp3">
                Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        <div class="mx-auto flex flex-row max-w-6xl mb-6 px-2">
            <div class="flex-1">
                <p class="text-3xl md:text-4xl text-titleRed font-semibold mb-5">Lars – “Hochdeutsch”</p>
                <audio class="min-w-full" controls>
                  <source src="{{asset('audio/Lars-Hochdeutsch-voice-sample.mp3')}}" type="audio/mp3">
                Your browser does not support the audio element.
                </audio>
            </div>
        </div>
        <div class="mx-auto flex flex-row max-w-6xl mb-12 px-2">
            <div class="flex-1">
                <p class="text-3xl md:text-4xl text-titleRed font-semibold mb-5">Markus – “Hochdeutsch”</p>
                <audio class="min-w-full" controls>
                  <source src="{{asset('audio/Markus-Hochdeutsch-voice-sample.mp3')}}" type="audio/mp3">
                Your browser does not support the audio element.
                </audio>
            </div>
        </div>
    </section>

    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages :bottomSectionTitle="$bottomSectionTitle" :bottomSectionText="$bottomSectionText" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"></x-bottom-section-pages>
@endsection
