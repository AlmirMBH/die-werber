@extends('layouts.app')

@section('content')

<section class="who-we-are mt-20">
    <div class="mx-auto max-w-7xl flex flex-col md:flex-row">
        <div class="flex-1 px-8">
            <h6 class="text-base mb-4 text-purple-800 px-8">Why choose us</h6>
            <h3 class="text-2xl mb-8 font-semibold px-8">Who we are</h3>
            <h4 class="text-lg mb-4 font-medium px-8">We say what we do and we do what we say!</h4>
            <p class="px-8">DieWerber was incorporated in 2017 in Pffäfikon ZH, Switzerland and since 2019 it has its representative
            office in Sarajevo, Bosnia and Herzegovina. DieWerber consists of a team of qualified and goal-oriented
            professionals with prominent social and professional competences. Honesty, tolerance, respect, integrity,
            responsibility and solidarity are our key values, and innovation is an important part of our corporate culture.
            We are the leading specialists for “our” services and simplicity is our trademark.</p>
        </div>
        <div class="flex-1 px-8">
            <div class="img-holder">
                <img src="{{asset('img/about-who-we-are.png')}}" class="transform scale-75 object-left-top" />
            </div>
        </div>
    </div>
</section>



<section class="about-video mt-20 bg-green-400">
    <div class="mx-auto max-w-7xl flex-col md:flex-row py-8">
        <div class="flex justify-center py-4">
            <video width="650" controls class="">
              <source src="https://die-werber.ch/wp-content/uploads/2020/02/Die-Werber-FINAL.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</section>

<section class="our-mission mt-20">
    <div class="mx-auto max-w-7xl flex flex-col md:flex-row">
        <div class="flex-1 px-8">
            <div class="img-holder">
               <img src="{{asset('img/about-our-mission.png')}}" />
            </div>
        </div>
        <div class="flex-1 px-8">
            <h6 class="text-base text-purple-800 mb-4">Why choose us</h6>
            <h3 class="text-2xl font-semibold mb-8">Our Mission</h3>
            <p>We provide our clients with the best and most reliable PR, Marketing and IT solutions in Switzerland</p>
        </div>
    </div>
</section>

<section class="our-vision mt-20">
    <div class="mx-auto max-w-7xl flex flex-col md:flex-row">
        <div class="flex-1 px-8">
            <h6 class="text-base text-purple-800 mb-4">Why choose us</h6>
            <h3 class="text-2xl font-semibold mb-8">Our Vision</h3>
            <p>The best and most reliable digital agency in Switzerland</p>
        </div>
        <div class="flex-1 px-8">
            <div class="img-holder">
                <img src="{{asset('img/about-our-vision.png')}}" />
            </div>
        </div>
    </div>
</section>


    {{--    sadrzaj--}}
    <h1 class="text-center">About</h1>


@endsection
