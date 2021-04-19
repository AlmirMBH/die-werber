@extends('layouts.app')

@section('content')
    <section class="mt-20">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Let your posters, brochures and flyers carry your message to the remotest regions of the business world</p>
                <p class="text-base custom-black-paragraph">Reaching your clients is not always easy, but managing the content that conveys the right message while reaching your clients could be a piece of cake. Let us help you make sure that your brochures, flyers and posters convey the best design and quality message in the printing world.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/print.png')}}"/>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-20 wide-silver-section bg-gray-100">
        <div class="mx-auto max-w-6xl flex-col md:flex-row py-8">
            <div class="flex justify-center py-4 mb-8 wide-section-text">
                <p class="text-3xl text-center font-light leading-snug">We provide our clients with the best and most reliable PR,<br> Marketing and IT solutions in Switzerland </p>
            </div>
            <div class="img-holder">
                <img src="{{asset('img/wide-vision.png')}}" class="" />
            </div>
        </div
    </section>
@endsection
