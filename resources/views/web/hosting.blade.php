@extends('layouts.app')

@section('content')
    <section class="mt-28">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Host your website to host your business partners</p>
                <p class="text-base custom-black-paragraph">Keeping your website up and running smoothly in the competitive business world, where interrupted availability may cause you to lose patience and clients, is not an easy task. For this purpose we created packages in a variety of disk space and monthly data transfer sizes that can be upgraded at any time. Do not let your website be the cause of your nightmares. Let us provide you with our alien technologies and services that will get your website noticed and appreciated…</p>
                <ul class="hosting-package-offer mt-7 ml-5">
                    <li>Starter plan</li>
                    <li>Intermediate plan</li>
                    <li>Advanced plan</li>
                    <li>Business plan</li>
                </ul>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/web-hosting-info.png')}}" alt="web-hosting-info"/>
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
                    <img src="{{asset('img/web-hosting-package.png')}}" alt="web-hosting-package"/>
                </div>
            </div>
            <div class="flex-1 ml-10 mt-10 md:mt-0">
                <p class="custom-red text-3xl font-bold mb-5">Hosting</p>
                <span class="line-under-section-title mb-10"></span>
                <p class="text-base custom-black-paragraph pr-5">Far far away, behind the mountains of  data, where no hacker has ever set foot, there exist our servers ready to host your website in the most secured and mysterious location. Use the privilege of storing your web content with us!</p>
            </div>
        </div>
    </section>
@endsection
