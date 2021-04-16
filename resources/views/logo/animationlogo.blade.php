@extends('layouts.app')

@section('content')
    <section class="mt-20">
        <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
            <div class="flex-1 mt-8 pl-10 p-5">
                <p class="custom-black text-xl font-semibold mb-5">Move, move, move...</p>
                <p class="text-base custom-black-paragraph">They say that in order to succeed in the business world you need to keep doing only three things – move, move, move! If you are already moving and networking that is awesome but let your logo move as well. If you are not happy with the pace of your movements start with your logo. Let it move! Let it inspire you to move!</p>
            </div>
            <div class="flex-1">
                <div class="section-image">
                    <img src="{{asset('img/logo-animation.gif')}}" alt="logo animation"/>
                </div>
            </div>
        </div>
    </section>
@endsection
