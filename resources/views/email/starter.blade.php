@extends('layouts.app')

@section('content')
    <section class="mt-20">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Wrap your messages in a colorful email paper…</p>
                <p class="text-base custom-black-paragraph">E-mail has the potential that other channels do not. A selected list of clients who want exactly what you are offering is better than a big list of random addresses. Let us help you pack your content into unique layouts with your logo and send it to your list of selected clients.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/starter.png')}}"/>
                </div>
            </div>
        </div>
    </section>
@endsection
