@extends('layouts.app')

@section('content')
    <section class="mt-20">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Draw what your brand does and keep the curiosity of your audience alive!</p>
                <p class="text-base custom-black-paragraph">Drawing and illustrating your business processes will make your brand lively again. Every stage of your business process, from your idea and research to the final product, has the potential to cast a different light on what you do and what you provide your clients with. Help your audience to become aware of what you can do for them.</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/whiteboard.png')}}" alt="whiteboard"/>
                </div>
            </div>
        </div>
    </section>
@endsection
