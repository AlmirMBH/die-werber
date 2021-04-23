@extends('layouts.app')

@section('content')

    <section class="pb-36 pt-24">
        <div class="mx-auto flex flex-row max-w-6xl">
            <div class="flex-1 bg-gradient-to-b from-purple-400 to-pink-200 shadow-lg m-4">
                <div class="service-info-block text-center px-10 py-12 ">
                    <img src="" class="object object-center" alt="home-design"/>
                    <h1 class="text-lg mb-7 text-white">Design</h1>
                    <p class="text-justify text-white"> As the difference between virtual and real world is slowly disappearing, businesses are under
                    increasing pressure to remain competitive. Let us design your clients
                    virtual experience and merging your activities with their everyday lives. </p>
                </div>
            </div>
            <div class="flex-1 bg-gradient-to-b from-purple-400 to-pink-200 shadow-lg m-4">
                <div class="service-info-block text-center px-10 py-12 ">
                    <img src="" class="object object-center" alt="home-development"/>
                    <h1 class="text-lg mb-7 text-white">Development</h1>
                    <p class="text-justify text-white"> Improving your online standing and presence is not an easy task and we know it.
                    Let us usethe cutting-edge technologies to build the best and most efficient digital experience for
                    your clients that will make your company look modern and unique. </p>
                </div>
            </div>
            <div class="flex-1 bg-gradient-to-b from-purple-400 to-pink-200 shadow-lg m-4">
                <div class="service-info-block text-center px-10 py-12 ">
                    <img src="" class="object object-center" alt="home-marketing"/>
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
            <div class="text-center text-white mb-10">
                <h1 class="text-base mb-2.5">Ready to grow</h1>
                <h1 class="text-4xl font-semibold">See how we can help you!</h1>
            </div>
        </div>
        <div class="mx-auto flex flex-row max-w-6xl justify-center">
            <div class="text-center text-white mb-10">
                <h1 class="text-base mb-2.5">TO DO</h1>
            </div>
        </div>
    </section>

    <section class="home-development py-24">
        <div class="mx-auto flex flex-row max-w-6xl">
            <div class="flex-1 m-4">
                <h1 class="my-4 text-purple-500">Development<h1>
                <h1 class="text-3xl mb-10 font-semibold"><span class="text-titleBlack">Web & App</span> <span class="text-titleRed">Development</span></h1>
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
                <div class="button">
                <a href="#" class="py-4 px-12 bg-gradient-to-r from-red-500 to-red-900 text-white rounded-t-3xl rounded-b-3xl">Learn more</a>
                </div>
            </div>
            <div class="flex-1 mx-auto flex-col">
                <div class="flex justify-center">
                    <img src="{{asset('img/home-web-development.png')}}" alt="home-webdevelopment">
                </div>
            </div>
        </div>
    </section>

    <section class="graphic-design py-24">
        <div class="mx-auto flex flex-row max-w-6xl">
            <div class="flex-1 mx-auto flex-col">
                <div class="flex justify-center">
                    <img src="{{asset('img/home-graphic-design.png')}}" alt="home-graphic-design">
                </div>
            </div>
            <div class="flex-1 m-4">
                <h1 class="my-4 text-purple-500">Design<h1>
                <h1 class="text-3xl mb-10 font-semibold"><span class="text-titleBlack">Web & App</span> <span class="text-titleRed">Development</span></h1>
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
                <div class="button">
                <a href="#" class="py-4 px-12 bg-gradient-to-r from-red-500 to-red-900 text-white rounded-t-3xl rounded-b-3xl">Learn more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="home-development py-24">
        <div class="mx-auto flex flex-row max-w-6xl">
            <div class="flex-1 m-4">
                <h1 class="my-4 text-purple-500">Video<h1>
                <h1 class="text-3xl mb-10 font-semibold"><span class="text-titleBlack">Animation</span> <span class="text-titleRed">Video</span></h1>
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
                <div class="button">
                <a href="#" class="py-4 px-12 bg-gradient-to-r from-red-500 to-red-900 text-white rounded-t-3xl rounded-b-3xl">Learn more</a>
                </div>
            </div>
            <div class="flex-1 mx-auto flex-col">
                <div class="flex justify-center">
                    <img src="{{asset('img/home-animation-video.png')}}" alt="home-animation-video">
                </div>
            </div>
        </div>
    </section>

    <section class="graphic-design py-24">
        <div class="mx-auto flex flex-row max-w-6xl">
            <div class="flex-1 mx-auto flex-col">
                <div class="flex justify-center">
                    <img src="{{asset('img/home-email-marketing.png')}}" alt="home-email-marketing">
                </div>
            </div>
            <div class="flex-1 m-4">
                <h1 class="my-4 text-purple-500">Marketing<h1>
                <h1 class="text-3xl mb-10 font-semibold"><span class="text-titleBlack">E-mail</span> <span class="text-titleRed">Marketing</span></h1>
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
                <div class="button">
                <a href="#" class="py-4 px-12 bg-gradient-to-r from-red-500 to-red-900 text-white rounded-t-3xl rounded-b-3xl">Learn more</a>
                </div>
            </div>
        </div>
    </section>

    <section class="home-development py-24">
        <div class="mx-auto flex flex-row max-w-6xl">
            <div class="flex-1 m-4">
                <h1 class="my-4 text-purple-500">Marketing<h1>
                <h1 class="text-3xl mb-10 font-semibold"><span class="text-titleBlack">Logo</span> <span class="text-titleRed">Design</span></h1>
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
                <div class="button">
                <a href="#" class="py-4 px-12 bg-gradient-to-r from-red-500 to-red-900 text-white rounded-t-3xl rounded-b-3xl">Learn more</a>
                </div>
            </div>
            <div class="flex-1 mx-auto flex-col">
                <div class="flex justify-center">
                    <img src="{{asset('img/home-logo-design.png')}}" alt="home-logo-design">
                </div>
            </div>
        </div>
    </section>

    <section class="graphic-design py-24">
        <div class="mx-auto flex flex-row max-w-6xl">
            <div class="flex-1 mx-auto flex-col">
                <div class="flex justify-center">
                    <img src="{{asset('img/home-bus-wrapping.png')}}" alt="home-bus-wrapping">
                </div>
            </div>
            <div class="flex-1 m-4">
                <h1 class="my-4 text-purple-500">Design<h1>
                <h1 class="text-3xl mb-10 font-semibold"><span class="text-titleBlack">Web & App</span> <span class="text-titleRed">Development</span></h1>
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
                <div class="button">
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
        <div class="mx-auto flex flex-row max-w-6xl justify-center">
            <div class="text-center text-white mb-10">
                <h1 class="text-base mb-2.5">TO DO</h1>
            </div>
        </div>
        <div class="mx-auto flex flex-row max-w-6xl justify-center">
            <div class="text-center text-white mb-10">
                <p class="text-base px-72 font-light" >After determining your requirements, we undertake a creative and
                 systematic, but often hectic and passionate research to increase the pool of knowledge about our
                 task and your corporate culture, vision, mission and clients.</p>
            </div>
        </div>
        </div>
    </section>

    <section class="home-portfolio mt-20">
        <div class="mx-auto flex flex-row max-w-6xl justify-center">
            <div class="text-center">
                <h1 class="text-4xl font-semibold text-titleRed">Portfolio</h1>
            </div>
        </div>

        <div class="home-portfolio-web-development">
            <div class="mx-auto flex flex-row max-w-6xl justify-center">
                <div class="text-center mt-14 mb-12">
                    <h1 class="text-3xl font-semibold text-titleBlack">Web development</h1>
                </div>
            </div>
            <div class="mx-auto flex flex-row max-w-6xl justify-center">
                <div class="flex-1 px-6 text-justify">
                    <div class="flex-1 px-6 justify-center">
                        <div class="flex justify-center">
                            <img src="{{asset('img/portfolio-web-swiss-hockey-fan.png')}}" class="rounded-lg shadow-xl" alt="portfolio-web-swiss-hockey-fan">
                        </div>
                        <div class="flex justify-center">
                            <a href="" class="text-lg text-green-400 my-4" target="_blank">Swiss Hockey Fan</a>
                        </div>
                    </div>
                </div>
                <div class="flex-1 px-6 text-justify">
                    <div class="flex-1 px-6 justify-center">
                        <div class="flex justify-center">
                            <img src="{{asset('img/portfolio-web-fussball-experte.png')}}" class="rounded-lg shadow-xl" alt="portfolio-web-fussball-experte">
                        </div>
                        <div class="flex justify-center">
                            <a href="" class="text-lg text-green-400 my-4" target="_blank">Fussball Experte</a>
                        </div>
                    </div>
                </div>
                <div class="flex-1 px-6 text-justify">
                    <div class="flex-1 px-6 justify-center">
                        <div class="flex justify-center">
                            <img src="{{asset('img/portfolio-web-chesselhuus.png')}}" class="rounded-lg shadow-xl" alt="portfolio-web-chesselhuus">
                        </div>
                        <div class="flex justify-center">
                            <a href="" class="text-lg text-green-400 my-4" target="_blank">Chesselhuus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-portfolio-graphic-design">
            <div class="mx-auto flex flex-row max-w-6xl justify-center">
                <div class="text-center mt-14 mb-12">
                    <h1 class="text-3xl font-semibold text-titleBlack">Graphic design</h1>
                </div>
            </div>
            <div class="mx-auto flex flex-row max-w-6xl justify-center">
                <div class="flex-1 px-6 text-justify">
                    <div class="flex-1 px-6 justify-center">
                        <div class="flex justify-center">
                            <img src="{{asset('img/portfolio-graphic-chimi-changa.png')}}" class="rounded-lg shadow-xl" alt="portfolio-graphic-chimi-changa">
                        </div>
                        <div class="flex justify-center">
                            <a href="" class="text-lg text-green-400 my-4" target="_blank">Chimi Changa</a>
                        </div>
                    </div>
                </div>
                <div class="flex-1 px-6 text-justify">
                    <div class="flex-1 px-6 justify-center">
                        <div class="flex justify-center">
                            <img src="{{asset('img/portfolio-graphic-der-schrank-spezialist.png')}}" class="rounded-lg shadow-xl" alt="portfolio-graphic-der-schrank-spezialist">
                        </div>
                        <div class="flex justify-center">
                            <a href="" class="text-lg text-green-400 my-4" target="_blank">Der Schrank Spezialist</a>
                        </div>
                    </div>
                </div>
                <div class="flex-1 px-6 text-justify">
                    <div class="flex-1 px-6 justify-center">
                        <div class="flex justify-center">
                            <img src="{{asset('img/portfolio-graphic-photovoltaik.png')}}" class="rounded-lg shadow-xl" alt="portfolio-graphic-photovoltaik">
                        </div>
                        <div class="flex justify-center">
                            <a href="" class="text-lg text-green-400 my-4" target="_blank">Photovoltaik Beratung</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-portfolio-animation-video">
            <div class="mx-auto flex flex-row max-w-6xl justify-center">
                <div class="text-center mt-14 mb-12">
                    <h1 class="text-3xl font-semibold text-titleBlack">Animation video</h1>
                </div>
            </div>
            <div class="mx-auto flex flex-row max-w-6xl justify-center">
                <div class="flex-1 px-6 text-justify">
                    <div class="flex-1 px-6 justify-center">
                        <div class="flex justify-center">
                            <img src="{{asset('img/portfolio-animationvideo-comcredit.png')}}" class="rounded-lg shadow-xl" alt="portfolio-animationvideo-comcredit">
                        </div>
                        <div class="flex justify-center">
                            <a href="" class="text-lg text-green-400 my-4" target="_blank">Comcredit</a>
                        </div>
                    </div>
                </div>
                <div class="flex-1 px-6 text-justify">
                    <div class="flex-1 px-6 justify-center">
                        <div class="flex justify-center">
                            <img src="{{asset('img/portfolio-animationvideo-gpa.png')}}" class="rounded-lg shadow-xl" alt="portfolio-animationvideo-gpa">
                        </div>
                        <div class="flex justify-center">
                            <a href="" class="text-lg text-green-400 my-4" target="_blank">GPA</a>
                        </div>
                    </div>
                </div>
                <div class="flex-1 px-6 text-justify">
                    <div class="flex-1 px-6 justify-center">
                        <div class="flex justify-center">
                            <img src="{{asset('img/portfolio-animationvideo-satcom.png')}}" class="rounded-lg shadow-xl" alt="portfolio-animationvideo-satcom">
                        </div>
                        <div class="flex justify-center">
                            <a href="" class="text-lg text-green-400 my-4" target="_blank">Satcom</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-portfolio-email-marketing">
            <div class="mx-auto flex flex-row max-w-6xl justify-center">
                <div class="text-center mt-14 mb-12">
                    <h1 class="text-3xl font-semibold text-titleBlack">Email marketing</h1>
                </div>
            </div>
            <div class="mx-auto flex flex-row max-w-6xl justify-center">
                <div class="flex-1 px-6 text-justify">
                    <div class="flex-1 px-6 justify-center">
                        <div class="flex justify-center">
                            <img src="{{asset('img/portfolio-email-chesselhuus.png')}}" class="rounded-lg shadow-xl" alt="portfolio-email-chesselhuus">
                        </div>
                        <div class="flex justify-center">
                            <a href="" class="text-lg text-green-400 my-4" target="_blank">Chesselhuus</a>
                        </div>
                    </div>
                </div>
                <div class="flex-1 px-6 text-justify">
                    <div class="flex-1 px-6 justify-center">
                        <div class="flex justify-center">
                            <img src="{{asset('img/portfolio-email-rs.png')}}" class="rounded-lg shadow-xl" alt="portfolio-email-rs">
                        </div>
                        <div class="flex justify-center">
                            <a href="" class="text-lg text-green-400 my-4" target="_blank">RS Unternehmungen</a>
                        </div>
                    </div>
                </div>
                <div class="flex-1 px-6 text-justify">
                    <div class="flex-1 px-6 justify-center">
                        <div class="flex justify-center">
                            <img src="{{asset('img/portfolio-email-seehof-davos.png')}}" class="rounded-lg shadow-xl" alt="portfolio-email-seehof-davos">
                        </div>
                        <div class="flex justify-center">
                            <a href="" class="text-lg text-green-400 my-4" target="_blank">Seehof Davos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-portfolio-email-marketing">
            <div class="mx-auto flex flex-row max-w-6xl justify-center">
                <div class="text-center mt-14 mb-12">
                    <h1 class="text-3xl font-semibold text-titleBlack">Logo Design</h1>
                </div>
            </div>
            <div class="mx-auto flex flex-row max-w-6xl justify-center">
                <div class="flex-1 px-6 text-justify">
                    <div class="flex-1 px-6 justify-center">
                        <div class="flex justify-center">
                            <img src="{{asset('img/portfolio-logo-swiss-hockey-fan.png')}}" class="rounded-lg shadow-xl" alt="portfolio-logo-swiss-hockey-fan">
                        </div>
                        <div class="flex justify-center">
                            <a href="" class="text-lg text-green-400 my-4" target="_blank">Swiss Hockey Fan</a>
                        </div>
                    </div>
                </div>
                <div class="flex-1 px-6 text-justify">
                    <div class="flex-1 px-6 justify-center">
                        <div class="flex justify-center">
                            <img src="{{asset('img/portfolio-logo-flipflop.png')}}" class="rounded-lg shadow-xl" alt="portfolio-logo-flipflop">
                        </div>
                        <div class="flex justify-center">
                            <a href="" class="text-lg text-green-400 my-4" target="_blank">Grass FlipFlop</a>
                        </div>
                    </div>
                </div>
                <div class="flex-1 px-6 text-justify">
                    <div class="flex-1 px-6 justify-center">
                        <div class="flex justify-center">
                            <img src="{{asset('img/portfolio-logo-chesselhuus.png')}}" class="rounded-lg shadow-xl" alt="portfolio-logo-chesselhuus">
                        </div>
                        <div class="flex justify-center">
                            <a href="" class="text-lg text-green-400 my-4" target="_blank">Chesselhuus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </section>


{{--    sadrzaj--}}
<h1 class="text-center">Home</h1>
@endsection
