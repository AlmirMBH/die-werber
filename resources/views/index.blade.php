@extends('layouts.app')

@section('title', 'Home')
@section('content')

    <section class="pb-36 pt-24">
        <div class="mx-auto flex flex-col md:flex-row max-w-6xl md:divide-x-2 md:divide-purple-400">
            <div class="md:w-2/6 m-4">
                <p class="font-semibold md:text-right text-2xl pr-4 md:py-20" data-en="" data-de="">How we do it?</p>
            </div>
            <div class="md:w-3/6 m-4">
                <p class="break-words md:pl-4 text-lg text-justify" data-en="" data-de="">After we have analyzed your vision and mission,
                 understood your goals, and learned about your clients needs, we build your brand identity from scratch.
                 If you already have your brand identity but you are not satisfied with it, let us help you
                 re-brand your business. Our services include consulting, graphic & web design, web development,
                 search engine optimization, social media management and E-mail marketing.</p>
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
                    <h1 class="text-lg mb-7 text-white">Design</h1>
                    <p class="text-justify text-white"> As the difference between virtual and real world is slowly disappearing, businesses are under
                    increasing pressure to remain competitive. Let us design your clients
                    virtual experience and merging your activities with their everyday lives. </p>
                </div>
            </div>
            <div class="flex-1 sm:mx-20 md:mx-4 bg-gradient-to-b from-purple-400 to-pink-200 shadow-lg m-4">
                <div class="service-info-block text-center px-10 py-12 ">
                    <div class="flex justify-center mb-6">
                        <img src="{{asset('img/home-design.png')}}" alt="home-box-design">
                    </div>
                    <h1 class="text-lg mb-7 text-white">Development</h1>
                    <p class="text-justify text-white"> Improving your online standing and presence is not an easy task and we know it.
                    Let us usethe cutting-edge technologies to build the best and most efficient digital experience for
                    your clients that will make your company look modern and unique. </p>
                </div>
            </div>
            <div class="flex-1 sm:mx-20 md:mx-4 bg-gradient-to-b from-purple-400 to-pink-200 shadow-lg m-4">
                <div class="service-info-block text-center px-10 py-12 ">
                    <div class="flex justify-center mb-6">
                        <img src="{{asset('img/home-marketing.png')}}" alt="home-box-marketing">
                    </div>
                    <h1 class="text-lg mb-7 text-white">Marketing</h1>
                    <p class="text-justify text-white"> Reaching your clients can sometimes be anything but easy, and
                    although the first contact with a new client might not bring about success, there is often no
                    second chance. Let us help you reach and re-reach your clients with the coziest user-friendly content. </p>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-40 pb-60 bg-green-400">
        <div class="mx-auto flex flex-row max-w-6xl justify-center">
            <div class="text-center text-white mb-20">
                <h1 class="text-base mb-2.5">Ready to grow</h1>
                <h1 class="text-4xl font-semibold">See how we can help you!</h1>
            </div>
        </div>
        <div class="mx-auto flex flex-row max-w-6xl justify-center mb-12">
            <div class="mx-auto flex flex-col w-8/12 md:w-10/12 md:flex-row shadow-lg  form text-center text-white border border-white rounded-r-2xl rounded-l-2xl text-white">
                <div class="md:w-2/5">
                <input type="text" id="web" name="web" placeholder="WEB Url*" class="placeholder-opacity-75 bg-transparent placeholder-white py-4 w-full pl-4 focus:outline-none text-center">
                </div>
                <div class="md:w-2/5">
                <input type="text" id="email" name="email" placeholder="Email Addresse*" class="placeholder-opacity-75 bg-transparent placeholder-white py-4 w-full pl-4 focus:outline-none text-center">
                </div>
                <div class="md:w-1/4 rounded-b-2xl md:rounded-r-2xl md:rounded-l-none bg-green-900 ">
                <input type="submit" value="Submit" class="py-4 bg-green-900 ">
                </div>
            </div>
        </div>
        <div class="mx-auto flex flex-row max-w-6xl justify-center">
            <div class="text-center text-white mb-20">
                <p class="text-green-900 text-base mb-2.5">Please check our <a class="text-white" href="">Privacy Policy</a> to find out how we manage and protect your data.</h1>
            </div>
        </div>
    </section>

    <section class="home-web-development py-24">
        <div class="mx-auto flex flex-col md:flex-row max-w-6xl">
            <div class="flex-1 m-4">
                <h1 class="my-4 text-purple-500">Development<h1>
                <h1 class="text-3xl mb-10 font-semibold"><span class="text-titleBlack">Web & App</span> <span class="text-titleRed">Development</span></h1>
                    <div data-aos="fade-up" data-aos-duration="2000">
                        <section>
                            <div class="mx-auto flex flex-row mb-8">
                                <div class="flex-1 pr-6 text-justify">
                                We like to believe that we are a team of web philosophers capable of developing the undevelopable
                                </div>
                                <div class="flex-1 text-justify">
                                Front-end, Back-end or Full-stack - it is all our cup of tea - we promise top-notch user experience
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="mx-auto flex flex-row mb-12">
                                <div class="flex-1 pr-6 text-justify">
                                Striving to become regional trend setters, we are always looking for new ways to make your web dreams come true
                                </div>
                                <div class="flex-1 text-justify">
                                Web meta-knowledge and understanding of our clients needs is our competitive advantage
                                </div>
                            </div>
                        </section>
                    </div>
                <div class="button" data-aos="fade-up" data-aos-duration="2000">
                <a href="#" class="py-4 px-12 bg-gradient-to-r from-red-500 to-red-900 text-white rounded-t-3xl rounded-b-3xl">Learn more</a>
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
                <h1 class="my-4 text-purple-500">Design<h1>
                <h1 class="text-3xl mb-10 font-semibold"><span class="text-titleBlack">Graphic</span> <span class="text-titleRed">Design</span></h1>
                    <div data-aos="fade-up" data-aos-duration="2000">
                        <section>
                            <div class="mx-auto flex flex-row mb-8">
                                <div class="flex-1 pr-6 text-justify">
                                We are a creative team ready to do outstanding work for your brand
                                </div>
                                <div class="flex-1 text-justify">
                                Branding, printing, creative design, motion graphic… you name it, we do it
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="mx-auto flex flex-row mb-12">
                                <div class="flex-1 pr-6 text-justify">
                                We follow the latest trends, we turn your ideas into reality, your deadline is our priority
                                </div>
                                <div class="flex-1 text-justify">
                                Teamwork is our most powerful weapon
                                </div>
                            </div>
                        </section>
                    </div>
                <div class="button" data-aos="fade-up" data-aos-duration="2000">
                <a href="#" class="py-4 px-12 bg-gradient-to-r from-red-500 to-red-900 text-white rounded-t-3xl rounded-b-3xl">Learn more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="home-animation-video py-24">
        <div class="mx-auto flex flex-col md:flex-row max-w-6xl">
            <div class="flex-1 m-4">
                <h1 class="my-4 text-purple-500">Video<h1>
                <h1 class="text-3xl mb-10 font-semibold"><span class="text-titleBlack">Animation</span> <span class="text-titleRed">Video</span></h1>
                    <div data-aos="fade-up" data-aos-duration="2000">
                        <section>
                            <div class="mx-auto flex flex-row mb-8">
                                <div class="flex-1 pr-6 text-justify">
                                Our video grand masters will invest hours of creative work to produce an outstanding video that your audience will like.
                                </div>
                                <div class="flex-1 text-justify">
                                Three-dimensional models, animations or geometric shapes can be combined into a mystical world of your own.
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="mx-auto flex flex-row mb-12">
                                <div class="flex-1 pr-6 text-justify">
                                Every stage of your business process, from your idea and research to the final product, has the potential to cast a different light on what you do and what you provide your clients with.
                                </div>
                                <div class="flex-1 text-justify">
                                The world of animations opens the door to an avenue of opportunities for your business, and your favorite character can even become a member of your team in it.
                                </div>
                            </div>
                        </section>
                    </div>
                <div class="button" data-aos="fade-up" data-aos-duration="2000">
                <a href="#" class="py-4 px-12 bg-gradient-to-r from-red-500 to-red-900 text-white rounded-t-3xl rounded-b-3xl">Learn more</a>
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
                <div class="flex justify-center" data-aos="fade-down" data-aos-duration="2000" >
                    <img src="{{asset('img/home-email-marketing.png')}}" alt="home-email-marketing">
                </div>
            </div>
            <div class="flex-1 m-4">
                <h1 class="my-4 text-purple-500">Marketing</h1>
                <h1 class="text-3xl mb-10 font-semibold"><span class="text-titleBlack">E-mail</span> <span class="text-titleRed">Marketing</span></h1>
                    <div data-aos="fade-up" data-aos-duration="2000">
                        <section>
                            <div class="mx-auto flex flex-row mb-8">
                                <div class="flex-1 pr-6 text-justify">
                                Our team of marketing virtuosi is capable of finding the most hidden wormholes in your business universe to reach your clients
                                </div>
                                <div class="flex-1 text-justify">
                                Our expertise in E-mail marketing can become your tentacles of business success
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="mx-auto flex flex-row mb-12">
                                <div class="flex-1 pr-6 text-justify">
                                We develop strategies that become trends, and our creativity can be part of your customized specialty
                                </div>
                                <div class="flex-1 text-justify">
                                One small step for your social media marketing, but a great benefit for your clients
                                </div>
                            </div>
                        </section>
                    </div>
                <div class="button" data-aos="fade-up" data-aos-duration="2000">
                <a href="#" class="py-4 px-12 bg-gradient-to-r from-red-500 to-red-900 text-white rounded-t-3xl rounded-b-3xl">Learn more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="home-logo-design py-24">
        <div class="mx-auto flex flex-col md:flex-row max-w-6xl">
            <div class="flex-1 m-4">
                <h1 class="my-4 text-purple-500">Marketing</h1>
                <h1 class="text-3xl mb-10 font-semibold"><span class="text-titleBlack">Logo</span> <span class="text-titleRed">Design</span></h1>
                    <div data-aos="fade-up" data-aos-duration="2000">
                        <section>
                            <div class="mx-auto flex flex-row mb-8">
                                <div class="flex-1 pr-6 text-justify">
                                Tell us about your corporate colors, values and vision and we will design a meaningful logo for your business. A logo that reflects who you are and what you stand for.
                                </div>
                                <div class="flex-1 text-justify">
                                Free your logo and give it another dimension for a better experience of your brand. It is simple, go 3D and let your brand live outside the 2D box.
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="mx-auto flex flex-row mb-12">
                                <div class="flex-1 pr-6 text-justify">
                                Whether you like 2D, 3D or motion graphics, our team of graphic wizards will invent creative ways to help your logo to move and create a lot of potential for networking.
                                </div>
                                <div class="flex-1 text-justify">
                                Powerful businesses have powerful visual identity that brings about many benefits such as recognition and access to markets they would not otherwise be able to reach.
                                </div>
                            </div>
                        </section>
                    </div>
                <div class="button" data-aos="fade-up" data-aos-duration="2000">
                <a href="#" class="py-4 px-12 bg-gradient-to-r from-red-500 to-red-900 text-white rounded-t-3xl rounded-b-3xl">Learn more</a>
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
                <h1 class="my-4 text-purple-500">Design</h1>
                <h1 class="text-3xl mb-10 font-semibold"><span class="text-titleBlack">Bus</span> <span class="text-titleRed">Wrapping</span></h1>
                    <div data-aos="fade-up" data-aos-duration="2000">
                        <section>
                            <div class="mx-auto flex flex-row mb-8">
                                <div class="flex-1 pr-6 text-justify">
                                Let us help you create the best bus foil on the market that conveys the right message to your audience.
                                </div>
                                <div class="flex-1 text-justify">
                                Buses are always around, they are moving and people like to see them.
                                </div>
                            </div>
                        </section>
                        <section>
                            <div class="mx-auto flex flex-row mb-12">
                                <div class="flex-1 pr-6 text-justify">
                                Whether your bus is on a cosy road to a tourist destination or on a jammed highway, it should always stand out.
                                </div>
                                <div class="flex-1 text-justify">
                                Bus surfaces are among the best places for modern and unique advertisements. Usethem to build your brand.
                                </div>
                            </div>
                        </section>
                    </div>
                <div class="button" data-aos="fade-up" data-aos-duration="2000">
                <a href="#" class="py-4 px-12 bg-gradient-to-r from-red-500 to-red-900 text-white rounded-t-3xl rounded-b-3xl">Learn more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="home-working-process pt-40 pb-12 bg-green-400">
        <div class="mx-auto flex flex-row max-w-6xl justify-center">
            <div class="text-center text-white mb-10">
                <h1 class="text-base mb-2.5">Work flow</h1>
                <h1 class="text-4xl font-semibold">Our working process</h1>
            </div>
        </div>
        <div class="mx-auto flex flex-row max-w-6xl mt-10">
            <div class="text-center text-white flex-1">
                <div class="circle bg-white p-5 w-16 rounded-full mx-auto mb-5 cursor-pointer" id="research" onclick="changeText(this)">
                    <img src="{{asset('img/workflow-research.png')}}" alt="workflowresearch">
                </div>
                <h1 class="text-bold text-lg">Research</h1>
            </div>

            <div class="text-center text-white flex-1">
                <div class="circle bg-white py-5 px-6 w-16 rounded-full mx-auto mb-5 cursor-pointer" id="planing" onclick="changeText(this)">
                    <img src="{{asset('img/workflow-planing.png')}}" alt="workflowresearch">
                </div>
                <h1 class="text-bold text-lg">Planing</h1>
            </div>

            <div class="text-center text-white flex-1">
                <div class="circle bg-white p-5 w-16 rounded-full mx-auto mb-5 cursor-pointer" id="implementing" onclick="changeText(this)">
                    <img src="{{asset('img/workflow-implementing.png')}}" alt="workflowresearch">
                </div>
                <h1 class="text-bold text-lg">Implementing</h1>
            </div>

            <div class="text-center text-white flex-1">
                <div class="circle bg-white p-5 w-16 rounded-full mx-auto mb-5 cursor-pointer" id="results" onclick="changeText(this)">
                    <img src="{{asset('img/workflow-results.png')}}" alt="workflowresearch">
                </div>
                <h1 class="text-bold text-lg">Results</h1>
            </div>
        </div>

        <div class="mx-auto flex flex-row max-w-6xl justify-center mt-20">
            <div class="text-center text-white mb-10 md:w-2/4 mx-2 md:mx-0">
                <p id="workflow-text" class="text-bold text-lg font-light text-justify">After determining your requirements, we undertake a creative and
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
        let research = "After determining your requirements, we undertake a creative and systematic, but often hectic and passionate research to increase the pool of knowledge about our task and your corporate culture, vision, mission and clients.";
        let planing = "As Benjamin Frankling once said „By failing to prepare, you are preparing to fail.“ We firmly believe that half of the project is already done after research and smart planing. Upon the analysis of your requirements, we develop a plan and start implementing it - the most exciting part.";
        let implementing = "Based on our research and in line with our plan, we tirelessly eat pizza, drink coke and play darts to stay focused on the task. The implementation often requires eye-opening sessions of brainstorming that keep us awake at night thinking about new ways of solving issues and securing our place among the elite designers and programmers – a bittersweet competition.";
        let results = "The best part of our work is when we see a smile on your face, and if it is not the best one you have, we can always offer to re-design it a bit. When you realize that your dreams came true, you will know that we always deliver what we promise but we do not guarantee that you will not ask for more of it.";

        function changeText(obj){
            let icon = obj.id;
            if(icon === "research"){
                $("#workflow-text").fadeOut(700, function(){
                    $("#workflow-text").html(research).fadeIn(700);
                })
            }else if(icon === "planing"){
                $("#workflow-text").fadeOut(700, function(){
                    $("#workflow-text").html(planing).fadeIn(700);
                })
            }else if(icon === "implementing"){
                $("#workflow-text").fadeOut(700, function(){
                    $("#workflow-text").html(implementing).fadeIn(700);
                })
            }else if(icon === "results"){
                $("#workflow-text").fadeOut(700, function(){
                    $("#workflow-text").html(results).fadeIn(700);
                })
            }
        }
    </script>
@endsection
