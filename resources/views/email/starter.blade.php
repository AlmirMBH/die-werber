@extends('layouts.pages')

@section('title', 'Email Starter')
@section('content')
    @php
        $titleEnglish = "Get a starter pack<span class='text-titleBlack'> to get started building your </span> brand";
        $topSectionTitleEnglish = "Wrap your messages in a colorful email paper…";
        $topSectionTextEnglish = "E-mail has the potential that other channels do not. A selected list of clients who want exactly what you are offering is better than a big list of random addresses. Let us help you pack your content into unique layouts with your logo and send it to your list of selected clients.";
        $bottomSectionTitleEnglish = "Starter";
        $bottomSectionTextEnglish = "We place your content in our layout, add your logo and send it to the clients by your choice. The statistical analysis will be available to you within ten working days. It will provide you with a better insight into what your clients like or dislike and you can keep modifying your campaigns until you perfect your advertising model.";

        $titleGerman = "Holen Sie sich ein Starterpaket, um mit dem Aufbau Ihrer Marke zu beginnen";
        $topSectionTitleGerman = "Wickeln Sie Ihre Nachrichten in ein buntes E-Mail-Papier…";
        $topSectionTextGerman = "E-Mail hat das Potenzial, dass andere Kanäle dies nicht tun. Eine ausgewählte Liste von Kunden, die genau das möchten, was Sie anbieten, ist besser als eine grosse Liste von zufälligen Adressen. Wir helfen Ihnen, Ihre Inhalte mit Ihrem Logo in einzigartige Layouts zu packen und an Ihre Liste ausgewählter Kunden zu senden.";
        $bottomSectionTitleGerman = "Starter";
        $bottomSectionTextGerman = "Wir platzieren Ihre Inhalte in unserem Layout, fügen Ihr Logo hinzu und senden es nach Ihrer Wahl an die Kunden. Die statistische Auswertung steht Ihnen innerhalb von zehn Arbeitstagen zur Verfügung. Sie erhalten einen besseren Einblick in die Vorlieben oder Abneigungen Ihrer Kunden und können Ihre Kampagnen so lange modifizieren, bis Sie Ihr Werbemodell perfektioniert haben.";

        // images and alts
        $topSectionImage = "email-starter-info.png";
        $topSectionAlt = "email-starter-info";
        $bottomSectionImage = "email-starter-package.png";
        $bottomSectionAlt = "email-starter-package";
    @endphp

    <x-title-section-pages :titleEnglish="$titleEnglish" :titleGerman="$titleGerman"></x-title-section-pages>
    <x-top-section-pages
        :topSectionTitleEnglish="$topSectionTitleEnglish" :topSectionTextEnglish="$topSectionTextEnglish" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"
        :topSectionTitleGerman="$topSectionTitleGerman" :topSectionTextGerman="$topSectionTextGerman"
    ></x-top-section-pages>
    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages
        :bottomSectionTitleEnglish="$bottomSectionTitleEnglish" :bottomSectionTextEnglish="$bottomSectionTextEnglish" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"
        :bottomSectionTitleGerman="$bottomSectionTitleGerman" :bottomSectionTextGerman="$bottomSectionTextGerman"
    ></x-bottom-section-pages>
@endsection
