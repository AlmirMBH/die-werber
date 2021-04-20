@extends('layouts.app')

@section('content')

    <section class="wide-silver-section bg-gray-100">
        <div class="mx-auto max-w-6xl flex-col md:flex-row py-8">
            <div class="flex justify-center py-4 wide-section-text">
                <h1 class="text-5xl text-center font-bold leading-snug text-titleRed">
                    Model <span class="text-titleBlack"> your </span> content <span class="text-titleBlack"> to  <br> model </span> your public image
                </h1>
            </div>
            <div class="flex justify-center mb-8 ">
                <span class="line-under-section-title mb-10"></span>
            </div>
        </div>
    </section>

    <section class="mt-28">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Visualize your project months ahead of its deadline</p>
                <p class="text-base custom-black-paragraph">You want to organize an event or manufacture a product but you are not sure if that is a good idea? Why would you not see your event before you even organized it or your product before you started producing it? We can convert your ideas into reality and let you take a look at the most intricate details of your event or product.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/graphic-design-3d-info.png')}}" alt="graphic-design-3d-info"/>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-28 wide-silver-section mission-section">
        <div class="mx-auto max-w-6xl flex-col md:flex-row py-8">
            <div class="flex justify-center py-4 mb-8 wide-section-text">
                <p class="text-3xl text-center font-light leading-snug px-2">We provide our clients with the best and most reliable PR,<br> Marketing and IT solutions in Switzerland </p>
            </div>
            <div class="img-holder">
                <img src="{{asset('img/general-mission-section.png')}}" alt="company-mission" />
            </div>
        </div>
    </section>

    <section class="mt-28">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/graphic-design-3d-package.png')}}" alt="graphic-design-3d-package"/>
                </div>
            </div>
            <div class="flex-1 ml-10 mt-10 md:mt-0">
                <p class="custom-red text-3xl font-bold mb-5">3D Modeling</p>
                <span class="line-under-section-title mb-10"></span>
                <p class="text-base custom-black-paragraph pr-5">Are you constructing buildings, organizing parties or decorating offices? You do not have to be concerned about it any more. Let us help you visualize your projects months ahead of their deadlines. Our 3D models will provide you with the opportunity to make all the changes to your projects before you even start implementing them.</p>
            </div>
        </div>
    </section>

@endsection
