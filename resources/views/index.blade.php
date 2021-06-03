@extends('layouts.app')

@section('title', 'Home')
@section('content')


    <section class="pb-36 pt-24">
        <div class="mx-auto flex flex-col md:flex-row max-w-6xl md:divide-x-2 md:divide-purple-400">
            <div class="md:w-2/6 m-4">
                @php
                    // REFACTOR!: move Language directory from Helpers to resources/lang
                    // If possible, adjust only this part of code: "App\Helpers\Languages\Index"
                        $index = App\Helpers\Languages\Index::getLanguages();
                @endphp
                <p class="font-semibold md:text-right text-2xl pr-4 md:py-20"
                   data-en="{{$index['en']['how-we-do-title']}}"
                   data-de="{{$index['de']['how-we-do-title']}}">{{$index['de']['how-we-do-title']}}</p>
            </div>
            <div class="md:w-3/6 m-4">
                <p class="break-words md:pl-4 text-lg text-justify" data-en="{{$index['en']['how-we-do-paragraph']}}"
                   data-de="{{$index['de']['how-we-do-paragraph']}}">{{$index['de']['how-we-do-paragraph']}}</p>
            </div>
        </div>
    </section>

    <section class="pb-36">
        <div class="mx-auto flex flex-col md:flex-row max-w-6xl">
            <div class="flex-1 sm:mx-20 md:mx-4 bg-gradient-to-b from-purple-400 to-pink-200 shadow-lg m-4">
                <div class="service-info-block text-center px-10 py-12 ">
                    <div class="flex justify-center mb-6">
                        <img src="{{asset('img/home-development.png')}}" alt="home-box-development">
                    </div>
                    <h1 class="text-lg mb-7 text-white" data-en="{{$index['en']['design']}}"
                        data-de="{{$index['de']['design']}}">{{$index['de']['design']}}</h1>
                    <p class="text-justify text-white" data-en="{{$index['en']['design-paragraph']}}"
                       data-de="{{$index['de']['design-paragraph']}}">{{$index['de']['design-paragraph']}}</p>
                </div>
            </div>
            <div class="flex-1 sm:mx-20 md:mx-4 bg-gradient-to-b from-purple-400 to-pink-200 shadow-lg m-4">
                <div class="service-info-block text-center px-10 py-12 ">
                    <div class="flex justify-center mb-6">
                        <img src="{{asset('img/home-design.png')}}" alt="home-box-design">
                    </div>
                    <h1 class="text-lg mb-7 text-white" data-en="{{$index['en']['development']}}"
                        data-de="{{$index['de']['development']}}">{{$index['de']['development']}}</h1>
                    <p class="text-justify text-white" data-en="{{$index['en']['development-paragraph']}}"
                       data-de="{{$index['de']['development-paragraph']}}">{{$index['de']['development-paragraph']}}</p>
                </div>
            </div>
            <div class="flex-1 sm:mx-20 md:mx-4 bg-gradient-to-b from-purple-400 to-pink-200 shadow-lg m-4">
                <div class="service-info-block text-center px-10 py-12 ">
                    <div class="flex justify-center mb-6">
                        <img src="{{asset('img/home-marketing.png')}}" alt="home-box-marketing">
                    </div>
                    <h1 class="text-lg mb-7 text-white" data-en="{{$index['en']['marketing']}}"
                        data-de="{{$index['de']['marketing']}}">{{$index['de']['marketing']}}</h1>
                    <p class="text-justify text-white" data-en="{{$index['en']['marketing-paragraph']}}"
                       data-de="{{$index['de']['marketing-paragraph']}}">{{$index['de']['marketing-paragraph']}}</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-40 pb-60 bg-green-400">
        <div class="mx-auto flex flex-row max-w-6xl justify-center">
            <div class="text-center text-white mb-20">
                <h1 class="text-base mb-2.5" data-en="{{$index['en']['help-tagline']}}"
                    data-de="{{$index['de']['help-tagline']}}">{{$index['de']['help-tagline']}}</h1>
                <h1 class="text-4xl font-semibold" data-en="{{$index['en']['help-title']}}"
                    data-de="{{$index['de']['help-title']}}">{{$index['de']['help-title']}}</h1>
            </div>
        </div>
        <div class="mx-auto flex flex-row max-w-6xl justify-center mb-12">
            <div
                class="mx-auto flex flex-col w-8/12 md:w-10/12 md:flex-row shadow-lg  form text-center text-white border border-white rounded-r-2xl rounded-l-2xl text-white">
                <div class="md:w-2/5">
                    <input type="text" id="web" name="web" placeholder="WEB Url*"
                           class="placeholder-opacity-75 bg-transparent placeholder-white py-4 w-full pl-4 focus:outline-none text-center">
                </div>
                <div class="md:w-2/5">
                    <input type="text" id="email" name="email" placeholder="Email Addresse*"
                           class="placeholder-opacity-75 bg-transparent placeholder-white py-4 w-full pl-4 focus:outline-none text-center">
                </div>
                <div class="md:w-1/4 rounded-b-2xl md:rounded-r-2xl md:rounded-l-none bg-green-900 ">
                    <input type="submit" value="Submit" class="py-4 bg-green-900 ">
                </div>
            </div>
        </div>
        <div class="mx-auto flex flex-row max-w-6xl justify-center">
            <div class="text-center text-white mb-20">
                <p class="text-green-900 text-base mb-2.5" data-en="{{$index['en']['help-privacy']}}"
                   data-de="{{$index['de']['help-privacy']}}">{{$index['de']['help-privacy']}}</p>
            </div>
        </div>
    </section>

    <section class="home-web-development py-24">
        <div class="mx-auto flex flex-col md:flex-row max-w-6xl">
            <div class="flex-1 m-4">
                <h1 class="my-4 text-purple-500" data-en="{{$index['en']['web-tagline']}}"
                    data-de="{{$index['de']['web-tagline']}}"> {{$index['de']['web-tagline']}}
                    <h1>
                        <h1 class="text-3xl mb-10 font-semibold" data-en="{{$index['en']['web-title']}}"
                            data-de="{{$index['de']['web-title']}}"> {{$index['de']['web-title']}} </h1>
                        <div data-aos="fade-up" data-aos-duration="2000">
                            <section>
                                <div class="mx-auto flex flex-row mb-8">
                                    <div class="flex-1 pr-6 text-justify paragraph-top-left"
                                         data-en="{{$index['en']['web-top-left-paragraph']}}"
                                         data-de="{{$index['de']['web-top-left-paragraph']}}">
                                        {{$index['de']['web-top-left-paragraph']}}
                                    </div>
                                    <div class="flex-1 text-justify paragraph-top-right"
                                         data-en="{{$index['en']['web-top-right-paragraph']}}"
                                         data-de="{{$index['de']['web-top-right-paragraph']}}">
                                        {{$index['de']['web-top-right-paragraph']}}
                                    </div>
                                </div>
                            </section>
                            <section>
                                <div class="mx-auto flex flex-row mb-12">
                                    <div class="flex-1 pr-6 text-justify paragraph-bottom-left"
                                         data-en="{{$index['en']['web-bottom-left-paragraph']}}"
                                         data-de="{{$index['de']['web-bottom-left-paragraph']}}">
                                        {{$index['de']['web-bottom-left-paragraph']}}
                                    </div>
                                    <div class="flex-1 text-justify paragraph-bottom-right"
                                         data-en="{{$index['en']['web-bottom-right-paragraph']}}"
                                         data-de="{{$index['de']['web-bottom-right-paragraph']}}">
                                        {{$index['de']['web-bottom-right-paragraph']}}
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="button" data-aos="fade-up" data-aos-duration="2000">
                            <a href="#"
                               class="py-4 px-12 bg-gradient-to-r from-red-500 to-red-900 text-white rounded-t-3xl rounded-b-3xl"
                               data-en="{{$index['en']['read-more']}}"
                               data-de="{{$index['de']['read-more']}}"> {{$index['de']['read-more']}} </a>
                        </div>
            </div>
            <div class="flex-1 mx-auto flex-col">
                <div class="flex justify-center" data-aos="fade-down" data-aos-duration="2000">
                    <img src="{{asset('img/home-web-development.png')}}" alt="home-webdevelopment">
                </div>
            </div>
        </div>
    </section>

    <section class="home-graphic-design py-24">
        <div class="mx-auto flex flex-col md:flex-row max-w-6xl">
            <div class="flex-1 mx-auto flex-col">
                <div class="flex justify-center" data-aos="fade-down" data-aos-duration="2000">
                    <img src="{{asset('img/home-graphic-design.png')}}" alt="home-graphic-design">
                </div>
            </div>
            <div class="flex-1 m-4">
                <h1 class="my-4 text-purple-500" data-en="{{$index['en']['graphic-tagline']}}"
                    data-de="{{$index['de']['graphic-tagline']}}">{{$index['de']['graphic-tagline']}}<h1>
                        <h1 class="text-3xl mb-10 font-semibold" data-en="{{$index['en']['graphic-title']}}"
                            data-de="{{$index['de']['graphic-title']}}"> {{$index['de']['graphic-title']}} </h1>
                        <div data-aos="fade-up" data-aos-duration="2000">
                            <section>
                                <div class="mx-auto flex flex-row mb-8">
                                    <div class="flex-1 pr-6 text-justify" data-en="{{$index['en']['graphic-top-left-paragraph']}}"
                                         data-de="{{$index['de']['graphic-top-left-paragraph']}}"> {{$index['de']['graphic-top-left-paragraph']}}</div>
                                    <div class="flex-1 text-justify" data-en="{{$index['en']['graphic-top-right-paragraph']}}"
                                         data-de="{{$index['de']['graphic-top-right-paragraph']}}"> {{$index['de']['graphic-top-right-paragraph']}} </div>
                                </div>
                            </section>
                            <section>
                                <div class="mx-auto flex flex-row mb-12">
                                    <div class="flex-1 pr-6 text-justify" data-en="{{$index['en']['graphic-bottom-left-paragraph']}}"
                                         data-de="{{$index['de']['graphic-bottom-left-paragraph']}}"> {{$index['de']['graphic-bottom-left-paragraph']}}</div>
                                    <div class="flex-1 text-justify" data-en="{{$index['en']['graphic-bottom-right-paragraph']}}"
                                         data-de="{{$index['de']['graphic-bottom-right-paragraph']}}"> {{$index['de']['graphic-bottom-right-paragraph']}}</div>
                                </div>
                            </section>
                        </div>
                        <div class="button" data-aos="fade-up" data-aos-duration="2000">
                            <a href="#"
                               class="py-4 px-12 bg-gradient-to-r from-red-500 to-red-900 text-white rounded-t-3xl rounded-b-3xl" data-en="{{$index['en']['read-more']}}"
                               data-de="{{$index['de']['read-more']}}"> {{$index['de']['read-more']}}</a>
                        </div>
            </div>
        </div>
    </section>

    <section class="home-animation-video py-24">
        <div class="mx-auto flex flex-col md:flex-row max-w-6xl">
            <div class="flex-1 m-4">
                <h1 class="my-4 text-purple-500" data-en="{{$index['en']['video-tagline']}}"
                    data-de="{{$index['de']['video-tagline']}}"> {{$index['de']['video-tagline']}}<h1>
                        <h1 class="text-3xl mb-10 font-semibold" data-en="{{$index['en']['video-title']}}"
                            data-de="{{$index['de']['video-title']}}"> {{$index['de']['video-title']}} </h1>
                        <div data-aos="fade-up" data-aos-duration="2000">
                            <section>
                                <div class="mx-auto flex flex-row mb-8">
                                    <div class="flex-1 pr-6 text-justify" data-en="{{$index['en']['video-top-left-paragraph']}}"
                                         data-de="{{$index['de']['video-top-left-paragraph']}}"> {{$index['de']['video-top-left-paragraph']}}</div>
                                    <div class="flex-1 text-justify" data-en="{{$index['en']['video-top-right-paragraph']}}"
                                         data-de="{{$index['de']['video-top-right-paragraph']}}"> {{$index['de']['video-top-right-paragraph']}} </div>
                                </div>
                            </section>
                            <section>
                                <div class="mx-auto flex flex-row mb-12">
                                    <div class="flex-1 pr-6 text-justify" data-en="{{$index['en']['video-bottom-left-paragraph']}}"
                                         data-de="{{$index['de']['video-bottom-left-paragraph']}}"> {{$index['de']['video-bottom-left-paragraph']}}</div>
                                    <div class="flex-1 text-justify" data-en="{{$index['en']['video-bottom-right-paragraph']}}"
                                         data-de="{{$index['de']['video-bottom-right-paragraph']}}"> {{$index['de']['video-bottom-right-paragraph']}} </div>
                                </div>
                            </section>
                        </div>
                        <div class="button" data-aos="fade-up" data-aos-duration="2000">
                            <a href="#"
                               class="py-4 px-12 bg-gradient-to-r from-red-500 to-red-900 text-white rounded-t-3xl rounded-b-3xl" data-en="{{$index['en']['read-more']}}"
                               data-de="{{$index['de']['read-more']}}"> {{$index['de']['read-more']}} </a>
                        </div>
            </div>
            <div class="flex-1 mx-auto flex-col">
                <div class="flex justify-center" data-aos="fade-down" data-aos-duration="2000">
                    <img src="{{asset('img/home-animation-video.png')}}" alt="home-animation-video">
                </div>
            </div>
        </div>
    </section>

    <section class="home-email-marketing py-24">
        <div class="mx-auto flex flex-col md:flex-row max-w-6xl">
            <div class="flex-1 mx-auto flex-col">
                <div class="flex justify-center" data-aos="fade-down" data-aos-duration="2000">
                    <img src="{{asset('img/home-email-marketing.png')}}" alt="home-email-marketing">
                </div>
            </div>
            <div class="flex-1 m-4">
                <h1 class="my-4 text-purple-500" data-en="{{$index['en']['email-tagline']}}"
                    data-de="{{$index['de']['email-tagline']}}"> {{$index['de']['email-tagline']}} </h1>
                <h1 class="text-3xl mb-10 font-semibold" data-en="{{$index['en']['email-title']}}"
                    data-de="{{$index['de']['email-title']}}"> {{$index['de']['email-title']}} </h1>
                <div data-aos="fade-up" data-aos-duration="2000">
                    <section>
                        <div class="mx-auto flex flex-row mb-8">
                            <div class="flex-1 pr-6 text-justify" data-en="{{$index['en']['email-top-left-paragraph']}}"
                                 data-de="{{$index['de']['email-top-left-paragraph']}}"> {{$index['de']['email-top-left-paragraph']}} </div>
                            <div class="flex-1 text-justify" data-en="{{$index['en']['email-top-right-paragraph']}}"
                                 data-de="{{$index['de']['email-top-right-paragraph']}}"> {{$index['de']['email-top-right-paragraph']}} </div>
                        </div>
                    </section>
                    <section>
                        <div class="mx-auto flex flex-row mb-12">
                            <div class="flex-1 pr-6 text-justify" data-en="{{$index['en']['email-bottom-left-paragraph']}}"
                                 data-de="{{$index['de']['email-bottom-left-paragraph']}}"> {{$index['de']['email-bottom-left-paragraph']}} </div>
                            <div class="flex-1 text-justify" data-en="{{$index['en']['email-bottom-right-paragraph']}}"
                                 data-de="{{$index['de']['email-bottom-right-paragraph']}}"> {{$index['de']['email-bottom-right-paragraph']}} </div>
                        </div>
                    </section>
                </div>
                <div class="button" data-aos="fade-up" data-aos-duration="2000">
                    <a href="#"
                       class="py-4 px-12 bg-gradient-to-r from-red-500 to-red-900 text-white rounded-t-3xl rounded-b-3xl" data-en="{{$index['en']['read-more']}}"
                       data-de="{{$index['de']['read-more']}}"> {{$index['de']['read-more']}} </a>
                </div>
            </div>
        </div>
    </section>

    <section class="home-logo-design py-24">
        <div class="mx-auto flex flex-col md:flex-row max-w-6xl">
            <div class="flex-1 m-4">
                <h1 class="my-4 text-purple-500" data-en="{{$index['en']['logo-tagline']}}"
                    data-de="{{$index['de']['logo-tagline']}}"> {{$index['de']['logo-tagline']}} </h1>
                <h1 class="text-3xl mb-10 font-semibold" data-en="{{$index['en']['logo-title']}}"
                    data-de="{{$index['de']['logo-title']}}"> {{$index['de']['logo-title']}} </h1>
                <div data-aos="fade-up" data-aos-duration="2000">
                    <section>
                        <div class="mx-auto flex flex-row mb-8">
                            <div class="flex-1 pr-6 text-justify" data-en="{{$index['en']['logo-top-left-paragraph']}}"
                                 data-de="{{$index['de']['logo-top-left-paragraph']}}"> {{$index['de']['logo-top-left-paragraph']}} </div>
                            <div class="flex-1 text-justify" data-en="{{$index['en']['logo-top-right-paragraph']}}"
                                 data-de="{{$index['de']['logo-top-right-paragraph']}}"> {{$index['de']['logo-top-right-paragraph']}} </div>
                        </div>
                    </section>
                    <section>
                        <div class="mx-auto flex flex-row mb-12">
                            <div class="flex-1 pr-6 text-justify" data-en="{{$index['en']['logo-bottom-left-paragraph']}}"
                                 data-de="{{$index['de']['logo-bottom-left-paragraph']}}"> {{$index['de']['logo-bottom-left-paragraph']}} </div>
                            <div class="flex-1 text-justify" data-en="{{$index['en']['logo-bottom-right-paragraph']}}"
                                 data-de="{{$index['de']['logo-bottom-right-paragraph']}}"> {{$index['de']['logo-bottom-right-paragraph']}} </div>
                        </div>
                    </section>
                </div>
                <div class="button" data-aos="fade-up" data-aos-duration="2000">
                    <a href="#"
                       class="py-4 px-12 bg-gradient-to-r from-red-500 to-red-900 text-white rounded-t-3xl rounded-b-3xl" data-en="{{$index['en']['read-more']}}"
                       data-de="{{$index['de']['read-more']}}"> {{$index['de']['read-more']}} </a>
                </div>
            </div>
            <div class="flex-1 mx-auto flex-col">
                <div class="flex justify-center" data-aos="fade-down" data-aos-duration="2000">
                    <img src="{{asset('img/home-logo-design.png')}}" alt="home-logo-design">
                </div>
            </div>
        </div>
    </section>

    <section class="home-bus-wrapping py-24">
        <div class="mx-auto flex flex-col md:flex-row max-w-6xl">
            <div class="flex-1 mx-auto flex-col">
                <div class="flex justify-center" data-aos="fade-down" data-aos-duration="2000">
                    <img src="{{asset('img/home-bus-wrapping.png')}}" alt="home-bus-wrapping">
                </div>
            </div>
            <div class="flex-1 m-4">
                <h1 class="my-4 text-purple-500" data-en="{{$index['en']['bus-tagline']}}"
                    data-de="{{$index['de']['bus-tagline']}}"> {{$index['de']['bus-tagline']}} </h1>
                <h1 class="text-3xl mb-10 font-semibold" data-en="{{$index['en']['bus-title']}}"
                                                               data-de="{{$index['de']['bus-title']}}"> {{$index['de']['bus-title']}} </h1>
                <div data-aos="fade-up" data-aos-duration="2000">
                    <section>
                        <div class="mx-auto flex flex-row mb-8">
                            <div class="flex-1 pr-6 text-justify" data-en="{{$index['en']['bus-top-left-paragraph']}}"
                                 data-de="{{$index['de']['bus-top-left-paragraph']}}"> {{$index['de']['bus-top-left-paragraph']}} </div>
                            <div class="flex-1 text-justify" data-en="{{$index['en']['bus-top-right-paragraph']}}"
                                 data-de="{{$index['de']['bus-top-right-paragraph']}}"> {{$index['de']['bus-top-right-paragraph']}} </div>
                        </div>
                    </section>
                    <section>
                        <div class="mx-auto flex flex-row mb-12">
                            <div class="flex-1 pr-6 text-justify" data-en="{{$index['en']['bus-bottom-left-paragraph']}}"
                                 data-de="{{$index['de']['bus-bottom-left-paragraph']}}"> {{$index['de']['bus-bottom-left-paragraph']}} </div>
                            <div class="flex-1 text-justify" data-en="{{$index['en']['bus-bottom-right-paragraph']}}"
                                 data-de="{{$index['de']['bus-bottom-right-paragraph']}}"> {{$index['de']['bus-bottom-right-paragraph']}} </div>
                        </div>
                    </section>
                </div>
                <div class="button" data-aos="fade-up" data-aos-duration="2000">
                    <a href="#"
                       class="py-4 px-12 bg-gradient-to-r from-red-500 to-red-900 text-white rounded-t-3xl rounded-b-3xl" data-en="{{$index['en']['read-more']}}"
                       data-de="{{$index['de']['read-more']}}"> {{$index['de']['read-more']}} </a>
                </div>
            </div>
        </div>
    </section>

    <section class="home-working-process pt-40 pb-12 bg-green-400">
        <div class="mx-auto flex flex-row max-w-6xl justify-center">
            <div class="text-center text-white mb-10">
                <h1 class="text-base mb-2.5" data-en="{{$index['en']['workflow-tagline']}}"
                    data-de="{{$index['de']['workflow-tagline']}}"> {{$index['de']['workflow-tagline']}} </h1>
                <h1 class="text-4xl font-semibold" data-en="{{$index['en']['workflow-title']}}"
                    data-de="{{$index['de']['workflow-title']}}"> {{$index['de']['workflow-title']}} </h1>
            </div>
        </div>
        <div class="mx-auto flex flex-row max-w-6xl mt-10">
            <div class="text-center text-white flex-1">
                <div class="circle bg-white p-5 w-16 rounded-full mx-auto mb-5 cursor-pointer" id="research"
                     onclick="changeText(this)">
                    <img src="{{asset('img/workflow-research.png')}}" alt="workflowresearch">
                </div>
                <h1 id="research-title" class="text-bold text-lg" data-en="{{$index['en']['workflow-research']}}"
                    data-de="{{$index['de']['workflow-research']}}">{{$index['de']['workflow-research']}}</h1>
            </div>

            <div class="text-center text-white flex-1">
                <div class="circle bg-white py-5 px-6 w-16 rounded-full mx-auto mb-5 cursor-pointer" id="planning"
                     onclick="changeText(this)">
                    <img src="{{asset('img/workflow-planing.png')}}" alt="workflowresearch">
                </div>
                <h1 id="planning-title" class="text-bold text-lg" data-en="{{$index['en']['workflow-planning']}}"
                    data-de="{{$index['de']['workflow-planning']}}"> {{$index['de']['workflow-planning']}} </h1>
            </div>

            <div class="text-center text-white flex-1">
                <div class="circle bg-white p-5 w-16 rounded-full mx-auto mb-5 cursor-pointer" id="implementing"
                     onclick="changeText(this)">
                    <img src="{{asset('img/workflow-implementing.png')}}" alt="workflowresearch">
                </div>
                <h1 id="implementation-title" class="text-bold text-lg" data-en="{{$index['en']['workflow-implementation']}}"
                    data-de="{{$index['de']['workflow-implementation']}}"> {{$index['de']['workflow-implementation']}} </h1>
            </div>

            <div class="text-center text-white flex-1">
                <div class="circle bg-white p-5 w-16 rounded-full mx-auto mb-5 cursor-pointer" id="results"
                     onclick="changeText(this)">
                    <img src="{{asset('img/workflow-results.png')}}" alt="workflowresearch">
                </div>
                <h1 id="results-title" class="text-bold text-lg" data-en="{{$index['en']['workflow-results']}}"
                    data-de="{{$index['de']['workflow-results']}}"> {{$index['de']['workflow-results']}} </h1>
            </div>
        </div>

        <div class="mx-auto flex flex-row max-w-6xl justify-center mt-20">
            <div class="text-center text-white mb-10 md:w-2/4 mx-2 md:mx-0">
                <p id="workflow-text" class="text-bold text-lg font-light text-justify">After determining your
                    requirements, we undertake a creative and
                    systematic, but often hectic and passionate research to increase the pool of knowledge about our
                    task and your corporate culture, vision, mission and clients.</p>
            </div>
        </div>
    </section>

    <section class="home-portfolio mt-16">
        <div class="mx-auto flex flex-row max-w-6xl justify-center">
            <div class="text-center mb-4">
                <h1 class="text-4xl font-bold text-titleRed">Portfolio</h1>
            </div>
        </div>
        <section id="portfolio-web">
            <div class="mx-auto flex flex-row max-w-6xl justify-center">
                <div class="text-center mt-14">
                    <h1 class="text-3xl font-bold text-titleBlack">Web development</h1>
                </div>
            </div>
            @php
                $portfolioClassNamespace = "App\Helpers\Portfolio\Web";
                $portfolioList = $portfolioClassNamespace::getSliderList();
            @endphp
            <x-portfolio-slider :portfolioList="$portfolioList"></x-portfolio-slider>
        </section>
        <section id="portfolio-graphic-design">
            <div class="text-center mt-20">
                <h1 class="text-3xl font-bold text-titleBlack">Graphic Design</h1>
            </div>
            @php
                $portfolioClassNamespace = "App\Helpers\Portfolio\Graphic";
                $portfolioList = $portfolioClassNamespace::getSliderList();
            @endphp
            <x-portfolio-slider :portfolioList="$portfolioList"></x-portfolio-slider>
        </section>
        <section id="portfolio-video">
            <div class="text-center mt-20">
                <h1 class="text-3xl font-bold text-titleBlack">Animation Video</h1>
            </div>
            @php
                $portfolioClassNamespace = "App\Helpers\Portfolio\Video";
                $portfolioList = $portfolioClassNamespace::getSliderList();
            @endphp
            <x-portfolio-slider :portfolioList="$portfolioList"></x-portfolio-slider>
        </section>
        <section id="portfolio-video">
            <div class="text-center mt-20">
                <h1 class="text-3xl font-bold text-titleBlack">Email Marketing</h1>
            </div>
            @php
                $portfolioClassNamespace = "App\Helpers\Portfolio\Email";
                $portfolioList = $portfolioClassNamespace::getSliderList();
            @endphp
            <x-portfolio-slider :portfolioList="$portfolioList"></x-portfolio-slider>
        </section>
        <section id="portfolio-video">
            <div class="text-center mt-20">
                <h1 class="text-3xl font-bold text-titleBlack">Logo Design</h1>
            </div>
            @php
                $portfolioClassNamespace = "App\Helpers\Portfolio\Logo";
                $portfolioList = $portfolioClassNamespace::getSliderList();
            @endphp
            <x-portfolio-slider :portfolioList="$portfolioList"></x-portfolio-slider>
        </section>
    </section>

    <script>
        let researchEnglish = "After determining your requirements, we undertake a creative and systematic, but often hectic and passionate research to increase the pool of knowledge about our task and your corporate culture, vision, mission and clients.";
        let researchGerman = "Nachdem wir Ihre Anforderungen ermittelt haben, betreiben wir eine kreative und systematische, aber oft hektische und leidenschaftliche Forschung, um den Wissenspool über unsere Aufgabe und Ihre Unternehmenskultur, Vision, Mission und Kunden zu erweitern.";
        let planningEnglish = "As Benjamin Frankling once said „By failing to prepare, you are preparing to fail.“ We firmly believe that half of the project is already done after research and smart planing. Upon the analysis of your requirements, we develop a plan and start implementing it - the most exciting part.";
        let planningGerman = "Wie Benjamin Frankling einmal sagte: „Wenn Sie sich nicht vorbereiten, bereiten Sie sich auf das Scheitern vor.“ Wir sind der festen Überzeugung, dass die Hälfte des Projekts bereits nach Recherche und klugem Planen abgeschlossen ist. Nach der Analyse Ihrer Anforderungen entwickeln wir einen Plan und beginnen mit dessen Umsetzung - der aufregendste Teil";
        let implementingEnglish = "Based on our research and in line with our plan, we tirelessly eat pizza, drink coke and play darts to stay focused on the task. The implementation often requires eye-opening sessions of brainstorming that keep us awake at night thinking about new ways of solving issues and securing our place among the elite designers and programmers – a bittersweet competition.";
        let implementingGerman = "Basierend auf unseren Forschungen und gemäß unserem Plan essen wir unermüdlich Pizza, trinken Cola und spielen Darts, um uns auf die Aufgabe zu konzentrieren. Die Implementierung erfordert oftmals aufsehenerregende Brainstorming-Sitzungen, die uns nachts wach halten und über neue Wegenachdenken, um Probleme zu lösen und unseren Platz unter den Elite-Designern und Programmierern zu sichern - ein bittersüßer Wettbewerb";
        let resultsEnglish = "The best part of our work is when we see a smile on your face, and if it is not the best one you have, we can always offer to re-design it a bit. When you realize that your dreams came true, you will know that we always deliver what we promise but we do not guarantee that you will not ask for more of it.";
        let resultsGerman = "Der beste Teil unserer Arbeit ist, wenn wir ein Lächeln auf Ihrem Gesicht sehen, und wenn es nicht so ist, wie Sie es haben wollten, können wir Ihnen immer anbieten, es ein wenig um zugestalten. Wenn Sie erkennen, dass Ihre Träume wahr wurden, werden Sie sehen, dass wir immer halten, was wir versprechen, aber wir garantieren nicht, dass Sie nicht mehr verlangen werden";

        function changeText(obj) {
            let icon = obj.id;
            let iconTitle = document.querySelector("#research-title").innerHTML;
            let planningTitle = document.querySelector("#planning-title").innerHTML;
            let implementationTitle = document.querySelector("#implementation-title").innerHTML;
            let resultsTitle = document.querySelector("#results-title").innerHTML;
            console.log(icon + " " + iconTitle + " " + planningTitle + " " + implementationTitle + " " + resultsTitle)

            if (icon === "research" && iconTitle === "Research") {
                $("#workflow-text").fadeOut(700, function () {
                    $("#workflow-text").html(researchEnglish).fadeIn(700);
                })
            }
            else if(icon === "research" && iconTitle === "Forschung"){
                $("#workflow-text").fadeOut(700, function () {
                    $("#workflow-text").html(researchGerman).fadeIn(700);
                })
            }
            else if (icon === "planning" && planningTitle === "Planning") {
                $("#workflow-text").fadeOut(700, function () {
                    $("#workflow-text").html(planningEnglish).fadeIn(700);
                })
            }

            else if (icon === "planning" && planningTitle === "Planung") {
                $("#workflow-text").fadeOut(700, function () {
                    $("#workflow-text").html(planningGerman).fadeIn(700);
                })
            }
            else if (icon === "implementing" && implementationTitle === "Implementing") {
                $("#workflow-text").fadeOut(700, function () {
                    $("#workflow-text").html(implementingEnglish).fadeIn(700);
                })
            } else if (icon === "implementing" && implementationTitle === "Umsetzung") {
                $("#workflow-text").fadeOut(700, function () {
                    $("#workflow-text").html(implementingGerman).fadeIn(700);
                })
            }
            else if (icon === "results" && resultsTitle === "Results") {
                $("#workflow-text").fadeOut(700, function () {
                    $("#workflow-text").html(resultsEnglish).fadeIn(700);
                })
            } else if (icon === "results" && resultsTitle === "Ergebnisse") {
                $("#workflow-text").fadeOut(700, function () {
                    $("#workflow-text").html(resultsEnglish).fadeIn(700);
                })
            }
        }
    </script>
@endsection
