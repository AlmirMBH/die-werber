@extends('layouts.pages')

@section('title', 'Voice Test')
@section('content')
    @php
        $titleEnglish = "Your business voice <span class='text-titleBlack'> is the reflection of </span> your own voice";
        $topSectionTitleEnglish = "Let us help you outvoice the voices of your competition...";
        $topSectionTextEnglish = "Clear, understandable and pleasant voice should be part of the personality of every company. The right voice makes your messages more interesting and appealing to your clients. It helps them understand your business and engage with your brand.";
        $bottomSectionTitleEnglish = "Voice Test";
        $bottomSectionTextEnglish = "The louder your voice is, the more it resonates with your clients. Your voice embodies your vision and helps you grow your audience. Let us give your business a booming voice that shatters the glasses and market boundaries to your audience.";

        $titleGerman = "Ihre Geschäftsstimme ist die Widerspiegelung Ihrer eigenen Stimme";
        $topSectionTitleGerman = "Lassen Sie sich von uns die Stimmen Ihres Wettbewerbs entlocken…";
        $topSectionTextGerman = "Eine klare, verständliche und angenehme Stimme sollte Teil der Persönlichkeit eines jeden Unternehmens sein. Die richtige Stimme macht Ihre Nachrichten interessanter und ansprechender für Ihre Kunden. Es hilft ihnen, Ihr Geschäft zu verstehen und sich mit Ihrer Marke auseinanderzusetzen.";
        $bottomSectionTitleGerman = "Stimmproben";
        $bottomSectionTextGerman = "Je lauter Ihre Stimme ist, desto mehr spricht sie Ihre Kunden an. Ihre Stimme schafft Ihre Vision und hilft Ihnen, Ihr Publikum zu vergrössern. Geben Sie Ihrem Unternehmen eine boomende Stimme, die die Brille und Marktgrenzen Ihres Publikums sprengt.";

        // images and alts
        $topSectionImage = "video-voice-info.png";
        $topSectionAlt = "video-voice-info";
        $bottomSectionImage = "video-voice-package.png";
        $bottomSectionAlt = "video-voice-package";
    @endphp

    <x-title-section-pages :titleEnglish="$titleEnglish" :titleGerman="$titleGerman"></x-title-section-pages>
    <x-top-section-pages
        :topSectionTitleEnglish="$topSectionTitleEnglish" :topSectionTextEnglish="$topSectionTextEnglish" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"
        :topSectionTitleGerman="$topSectionTitleGerman" :topSectionTextGerman="$topSectionTextGerman"
    ></x-top-section-pages>

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
    <x-bottom-section-pages
        :bottomSectionTitleEnglish="$bottomSectionTitleEnglish" :bottomSectionTextEnglish="$bottomSectionTextEnglish" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"
        :bottomSectionTitleGerman="$bottomSectionTitleGerman" :bottomSectionTextGerman="$bottomSectionTextGerman"
    ></x-bottom-section-pages>
@endsection
