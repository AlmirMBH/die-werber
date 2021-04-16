@extends('layouts.app')

@section('content')
    <section class="mt-20">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Use your 10 seconds to grab attention and deliver your message</p>
                <p class="text-base custom-black-paragraph">You want majority of the human kind to like your content? Cool! You already know that 70% of people are visual learners and our team of design vultures knows what they need. Let us compress your ideas and blend them with various concepts to get a unique content that outshines the shine itself.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/graphicillustrations.png')}}"/>
                </div>
            </div>
        </div>
    </section>
@endsection
