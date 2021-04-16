@extends('layouts.app')

@section('content')
    <section class="mt-20">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Let us create something unique - your logo!</p>
                <p class="text-base custom-black-paragraph">Let us help you become a recognizable member of your business branch. Tell us about your corporate colors, values and vision and we will design a meaningful logo for your business. A logo that reflects who you are and what you stand for.
                </p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/logo.png')}}"/>
                </div>
            </div>
        </div>
    </section>
@endsection
