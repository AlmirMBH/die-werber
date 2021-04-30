@extends('layouts.app')

@section('title', 'Contact')
@section('content')

    <section class="mt-5 pt-16 md:pt-0 md:mt-5">
        <div class="mx-auto max-w-6xl flex-col md:flex-row py-8">
            <div class="flex justify-center py-4 wide-section-text">
                <p class="text-5xl text-center font-bold leading-snug text-titleRed px-2 md:px-0 md:w-1/2">
                    <span class='text-titleBlack'> Get in </span> touch
                </p>
            </div>
            <div class="flex justify-center">
                <span class="line-under-section-title mb-10"></span>
            </div>
        </div>
    </section>

    <section>
        <div class="contact-text font-nunito text-paragraphGray font-bolder text-center text-xl md:w-1/3 mx-auto p-4 sm:p-0">
            <p>If you have a question or would like to work with us send an e-mail to:
                <a href="mailto:info@die-werber.ch" class="text-green-500 hover:text-blue-800">info@die-werber.ch</a> or fill out the form below</p>
        </div>
    </section>

    <section>
        <div class="justify-center mt-20 px-5">
            <form action="#" method="post">
                <div class="max-w-4xl mx-auto px-5">
                    <div class="sm:flex">
                        <div class="sm:w-1/2 sm:pr-3">
                            <input type="text" name="name" id="name" placeholder="First Name*" class="block border-2 border-gray-300 p-3 mb-6 w-full">
                        </div>
                        <div class="sm:w-1/2 sm:pl-3">
                            <input type="text" name="surname" id="surname" placeholder="Last Name*" class="block border-2 border-gray-300 p-3 mb-6 w-full">
                        </div>
                    </div>
                    <div class="sm:flex">
                        <div class="sm:w-1/2 sm:pr-3">
                            <input type="text" name="email" id="email" placeholder="E-mail*" class="block border-2 border-gray-300 p-3 mb-6 w-full">
                        </div>
                        <div class="sm:w-1/2 sm:pl-3">
                            <input type="text" name="url" id="url" placeholder="Web URL" class="block border-2 border-gray-300 p-3 mb-6 w-full">
                        </div>
                    </div>
                    <div class="sm:flex">
                        <div class="sm:w-1/2 sm:pr-3">
                            <input type="text" name="phone" id="phone" placeholder="Phone" class="block border-2 border-gray-300 p-3 mb-6 w-full">
                        </div>
                        <div class="sm:w-1/2 sm:pl-3">
                            <input type="text" name="subject" id="subject" placeholder="Subject" class="block border-2 border-gray-300 p-3 w-full">
                        </div>
                    </div>
                </div>
                <div class="max-w-4xl mx-auto mt-6 px-5">
                    <textarea name="message" id="message" placeholder="Your message" class="block border-2 text-gray-600 border-gray-300 p-4 w-full"></textarea>
                </div>
                <button id="btn" class="contact-form-button flex mx-auto text-center font-nunito mt-12">Submit</button>
            </form>
        </div>
    </section>

    <section class="mt-5 pt-16 md:pt-0 md:mt-5">
        <div class="mx-auto max-w-6xl flex-col md:flex-row py-8">
            <div class="flex justify-center py-4 wide-section-text">
                <p class="text-5xl text-center font-bold leading-snug text-titleRed px-2 md:px-0 md:w-1/2">
                    <span class='text-titleBlack text-4xl'> Contact </span>
                </p>
            </div>
            <div class="flex justify-center">
                <span class="line-under-section-title mb-10"></span>
            </div>
        </div>
    </section>

    <section class="team-section team-section-two">
        <div class="grid grid-cols-1 gap-4 mx-auto max-w-6xl p-8 md:grid-cols-4">
            <div class="office text-center">
                <div class="office-box-content">
                    <p class="office-icon-box-description"></p>
                    <p class="contact-info-text"><strong>Office</strong></p>
                    <p>
                        <a href="https://goo.gl/maps/jBSM94sGBiKUFBNJA" target="_blank" class="office-content">Tumbelenstrasse 6 <br>8330 Pfäffikon<br> Schweiz</a>
                    </p>
                </div>
            </div>
            <div class="headquarters text-center">
                <div class="headquarters-icon-box-content">
                    <p class="headquarters-icon-box-description"></p><p class="headquarters-info-text"><strong>Headquarters</strong></p>
                    <p>
                        <a href="https://goo.gl/maps/ZqfUD7QvsoDbtQY76" target="_blank" class="info-content">Schönbüelstrasse 34A<br>8330 Pfäffikon<br>Schweiz</a>
                    </p>
                </div>
            </div>
            <div class="phone text-center">
                <div class="phone-icon-box-content">
                    <p class="phone-icon-box-description"></p>
                    <p class="phone-info-text"><strong>Phone</strong></p>
                    <a href="callto:+41449523024" class="phone-content">+41 (0) 44 952 30 24</a>
                </div>
            </div>
            <div class="email text-center">
                <div class="email-icon-box-content">
                    <p class="email-icon-box-description"></p><p class="contact-info-text"><strong>Email</strong></p>
                    <a href="mailto:info@die-werber.ch" class="email-info-content block">info@die-werber.ch</a>
                    <a href="mailto:support@die-werber.ch" class="email-info-content">support@die-werber.ch</a>
                </div>
            </div>
        </div>
    <section>


    <section>
        <div style="height: 400px; width:700px" class="flex mx-auto">{!! Mapper::render() !!}</div>
    </section>


@endsection
