@extends('layouts.pages')

@section('title', '3D Logo')
@section('content')
    @php
        $titleEnglish = "Improve <span class='text-titleBlack'> your </span> logo <span class='text-titleBlack'>to improve your</span> recognition";
        $topSectionTitleEnglish = "Engaging, attractive, eye-catching and inspiring - your 3D logo";
        $topSectionTextEnglish = "Your logo rocks, but your 3D logo would rock even more. Enhancing the attractiveness of your logo to attract clients is always a cool idea. Your new 3D logo could launch your brand into the new business orbit and help you avoid being similar to other brands that do not rock good enough.";
        $bottomSectionTitleEnglish = "3D Logo";
        $bottomSectionTextEnglish = "Living in a 2D world is no longer the only option for contemporary businesses. Although it might be funny, it is narrow, bordered by pretty strict lines, and somewhat empty. Free your logo and give it another dimension for a better experience of your brand.  It is simple, go 3D and let your brand live outside the 2D box. Your business deserves it.";

        $titleGerman = "Verbessern Sie Ihr Logo, um Ihre Wiedererkennung zu verbessern";
        $topSectionTitleGerman = "Ansprechend, atraktiv, auffällig und inspirierend – Ihr 3D-Logo";
        $topSectionTextGerman = "Ihr Logo rockt, aber Ihr 3D-Logo würde noch mehr rocken. Es ist immer eine coole Idee, die Attraktivität Ihres Logos zu steigern, um Kunden anzulocken. Ihr neues 3D-Logo könnte Ihre Marke in eine neue Geschäftsumgebung bringen und Ihnen dabei helfen, nicht mit anderen Marken vergleichbar zu sein, die nicht gut genug rocken.";
        $bottomSectionTitleGerman = "3D-Logo";
        $bottomSectionTextGerman = "Das Leben in einer 2D-Welt ist nicht mehr die einzige Option für moderne Unternehmen. Obwohl es lustig sein mag, ist es schmal, von ziemlich strengen Linien begrenzt und etwas leer. Geben Sie Ihr Logo frei und verleihen Sie ihm eine neue Dimension, um Ihre Marke noch besser zu erleben. Es ist ganz einfach: Gehen Sie zu 3D und lassen Sie Ihre Marke ausserhalb der 2D-Box leben. Ihr Unternehmen hat es verdient.";

        // images and alts
        $topSectionImage = "logo-3d-info.png";
        $topSectionAlt = "logo-3d-info";
        $bottomSectionImage = "logo-3d-package.png";
        $bottomSectionAlt = "logo-3d-package";
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
