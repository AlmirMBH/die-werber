@extends('layouts.app')

@section('title', 'Team')
@section('content')
    @php
        $titleEnglish = "Our<span class='text-titleRed'> Team</span>";
        $titleGerman = "Unser Team";
    @endphp

    <section class="wide-silver-section mt-5 pt-16 md:pt-0 md:mt-5">
        <div class="mx-auto max-w-6xl flex-col md:flex-row py-8">
            <div class="flex justify-center py-4 wide-section-text">
                <p class="text-5xl text-center font-bold leading-snug text-titleBlack px-2 md:px-0 md:w-1/2"
                data-en="{{$titleEnglish}}" data-de="{{$titleGerman}}">{{$titleGerman}}</p>
            </div>
            <div class="flex justify-center mb-8 ">
                <span class="line-under-section-title mb-10"></span>
            </div>
        </div>
    </section>

    <section class="team-section team-section-one">
        <div class="grid grid-cols-1 gap-4 mx-auto max-w-6xl p-8 md:grid-cols-4">
          <div class="team-member text-center">
            <img src="{{asset("/img/our-team-reto.jpeg")}}" alt="team-member-image"/>
            <h1 class="my-6 font-bold text-lg"> Reto Schaufelberger </h1>
            <hr class="border-2 border-purple-200">
          </div>
          <div class="team-member text-center">
            <img src="{{asset("/img/our-team-gulia.jpeg")}}" alt="team-member-image" class="mb-2"/>
            <h1 class="my-6 font-bold text-lg"> Giulia Boffa </h1>
            <hr class="border-2 border-purple-200">
          </div>
        </div>
    <section>

    <section class="team-section team-section-two">
        <div class="grid grid-cols-1 gap-4 mx-auto max-w-6xl p-8 md:grid-cols-4">
          <div class="team-member text-center">
            <img src="{{asset("/img/our-team-placeholder-male-blue.jpeg")}}" alt="team-member-image" class="mb-2 min-w-full" />
            <h1 class="my-6 font-bold text-lg"> Samer Sacic </h1>
            <hr class="border-2 border-purple-200">
          </div>
          <div class="team-member text-center">
            <img src="{{asset("/img/our-team-placeholder-male-orange.jpeg")}}" alt="team-member-image" class="mb-2 min-w-full" />
            <h1 class="my-6 font-bold text-lg"> Almir Mustafic </h1>
            <hr class="border-2 border-purple-200">
          </div>
          <div class="team-member text-center">
            <img src="{{asset("/img/our-team-placeholder-male-blue.jpeg")}}" alt="team-member-image" class="mb-2 min-w-full"/>
            <h1 class="my-6 font-bold text-lg"> Zekerijah Sehic </h1>
            <hr class="border-2 border-purple-200">
          </div>
          <div class="team-member text-center">
            <img src="{{asset("/img/our-team-placeholder-male-orange.jpeg")}}" alt="team-member-image" class="mb-2 min-w-full"/>
            <h1 class="my-6 font-bold text-lg"> Minel Haskic </h1>
            <hr class="border-2 border-purple-200">
          </div>
        </div>
    <section>

    <section class="team-section team-section-three">
        <div class="grid grid-cols-1 gap-4 mx-auto max-w-6xl p-8 md:grid-cols-4">
          <div class="team-member text-center">
            <img src="{{asset("/img/our-team-placeholder-female-blue.jpeg")}}" alt="team-member-image" class="mb-2 min-w-full"/>
            <h1 class="my-6 font-bold text-lg"> Nadira Mustafic </h1>
            <hr class="border-2 border-purple-200">
          </div>
        </div>
    <section>

@endsection
