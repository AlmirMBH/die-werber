@extends('layouts.app')

@section('content')
    <section class="mt-20">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Let your clients see their new offices or events days in advance!</p>
                <p class="text-base custom-black-paragraph">Telling stories and providing clients with the opportunity to visualize their products and services is a trademark of great brands. Our video grand masters will invest hours of creative work to produce an outstanding video that your audience will like.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/video3d.png')}}" alt="3d video"/>
                </div>
            </div>
        </div>
    </section>
@endsection
