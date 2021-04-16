@extends('layouts.app')

@section('content')
    <section class="mt-20">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Your graphic content is the most sincere intermediary between you and your client!</p>
                <p class="text-base custom-black-paragraph">As the old saying goes, “Actions speak louder than words”. Let us combine your messages with photos, illustrations and drawings and make them speak louder than your words. Let them leave a memorable impression on your clients. An irresistible impression that turns incorrigible phlegamtics into curios explorers.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/graphics.png')}}"/>
                </div>
            </div>
        </div>
    </section>
@endsection
