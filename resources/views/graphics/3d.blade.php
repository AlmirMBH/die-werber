@extends('layouts.app')

@section('title', '3D Modeling')
@section('content')
    @php
        $title = "Model <span class='text-titleBlack'> your </span> content <span class='text-titleBlack'> to model </span> your public image";
        $topSectionTitle = "Visualize your project months ahead of its deadline";
        $topSectionText = "You want to organize an event or manufacture a product but you are not sure if that is a good idea? Why would you not see your event
        before you even organized it or your product before you started producing it? We can convert your ideas into reality and let you take a look at the most
        intricate details of your event or product.";
        $topSectionImage = "graphic-design-3d-info.png";
        $topSectionAlt = "graphic-design-3d-info";
        $bottomSectionTitle = "3D Modeling";
        $bottomSectionText = "Are you constructing buildings, organizing parties or decorating offices? You do not have to be concerned about it any more.
        Let us help you visualize your projects months ahead of their deadlines. Our 3D models will provide you with the opportunity to make all the changes
        to your projects before you even start implementing them.";
        $bottomSectionImage = "graphic-design-3d-package.png";
        $bottomSectionAlt = "graphic-design-3d-package";
    @endphp

    <x-section-title :title="$title"></x-section-title>
    <x-top-section-pages :topSectionTitle="$topSectionTitle" :topSectionText="$topSectionText" :topSectionImage="$topSectionImage" :topSectionAlt="$topSectionAlt"></x-top-section-pages>
    <x-mid-section-pages></x-mid-section-pages>
    <x-bottom-section-pages :bottomSectionTitle="$bottomSectionTitle" :bottomSectionText="$bottomSectionText" :bottomSectionImage="$bottomSectionImage" :bottomSectionAlt="$bottomSectionAlt"></x-bottom-section-pages>
@endsection
