@extends('layouts.app')

@section('content')
    <section class="mt-20">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Engaging, attractive, eye-catching and inspiring - your 3D logo</p>
                <p class="text-base custom-black-paragraph">Your logo rocks, but your 3D logo would rock even more. Enhancing the attractiveness of your logo to attract clients is always a cool idea. Your new 3D logo could launch your brand into the new business orbit and help you avoid being similar to other brands that do not rock good enough.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/logo3d.png')}}"/>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-28">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Engaging, attractive, eye-catching and inspiring - your 3D logo</p>
                <p class="text-base custom-black-paragraph">Your logo rocks, but your 3D logo would rock even more. Enhancing the attractiveness of your logo to attract clients is always a cool idea. Your new 3D logo could launch your brand into the new business orbit and help you avoid being similar to other brands that do not rock good enough.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/logo-3d-info.png')}}" alt="logo-3d-info"/>
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
                    <img src="{{asset('img/logo-3d-package.png')}}" alt="logo-3d-package"/>
                </div>
            </div>
            <div class="flex-1 ml-10 mt-10 md:mt-0">
                <p class="custom-red text-3xl font-bold mb-5">3D Logo</p>
                <span class="line-under-section-title mb-10"></span>
                <p class="text-base custom-black-paragraph pr-5">Living in a 2D world is no longer the only option for contemporary businesses. Although it might be funny, it is narrow, bordered by pretty strict lines, and somewhat empty. Free your logo and give it another dimension for a better experience of your brand.  It is simple, go 3D and let your brand live outside the 2D box. Your business deserves it.</p>
            </div>
        </div>
    </section>
@endsection
