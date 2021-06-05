@extends('layouts.pages')

@section('title', '3D Modeling')
@section('content')
    @php
        $titleEnglish = "Model <span class='text-titleBlack'> your </span> content <span class='text-titleBlack'> to model </span> your public image";
        $topSectionTitleEnglish = "Visualize your project months ahead of its deadline";
        $topSectionTextEnglish = "You want to organize an event or manufacture a product but you are not sure if that is a good idea? Why would you not see your event before you even organized it or your product before you started producing it? We can convert your ideas into reality and let you take a look at the most intricate details of your event or product.";
        $bottomSectionTitleEnglish = "3D Modeling";
        $bottomSectionTextEnglish = "Are you constructing buildings, organizing parties or decorating offices? You do not have to be concerned about it any more. Let us help you visualize your projects months ahead of their deadlines. Our 3D models will provide you with the opportunity to make all the changes to your projects before you even start implementing them.";

        $titleGerman = "German title";
        $topSectionTitleGerman = "German top title";
        $topSectionTextGerman = "German top section text";
        $bottomSectionTitleGerman = "German bottom section title";
        $bottomSectionTextGerman = "German bottom section text";

        // images and alts
        $topSectionImage = "graphic-design-3d-info.png";
        $topSectionAlt = "graphic-design-3d-info";
        $bottomSectionImage = "graphic-design-3d-package.png";
        $bottomSectionAlt = "graphic-design-3d-package";
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
