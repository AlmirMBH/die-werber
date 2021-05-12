@extends('layouts.app')

@section('title', 'Questions')
@section('content')

@section('content')
    @php
    // btn and card are required for jquery
        $title = "<span class='text-titleBlack'>Frequently asked<span class='text-titleRed'><br> questions</span></p>";
        $faqTitle1 = "I have a business but I do not know how to reach clients. Can you help me?";
        $faqText1 = "Yes, we can. Clients are extremely important to businesses and they invest a lot of time and resources in retaining and expanding their client bases.
                        You are certainly not the only client with this challenge and we can help you even if you are starting from scratch.
                        We can determine your target audience, develop a PR and Marketing plan and manage your social networks. In addition, we can design or re-design your
                        website and optimize it for search engines.";
        $btn1 = "btn1";
        $card1 = "card1";

        $faqTitle2 = "Can you digitalize my business processes?";
        $faqText2 = "We can digitalize almost anything. If you want to streamline your business processes we can certainly help you.";
        $btn2 = "btn2";
        $card2 = "card2";

        $faqTitle3 = "Do you offer customized services?";
        $faqText3 = "Yes. We have a range of standardized services but we also customize our services in accordance with the requirements of our clients.";
        $btn3 = "btn3";
        $card3 = "card3";

        $faqTitle4 = "Do you offer 24/7 support to your clients?";
        $faqText4 = "Of course. All our clients can contact our support center at any time.";
        $btn4 = "btn4";
        $card4 = "card4";

        $faqTitle5 = "How do I know that I need IT services for my business?";
        $faqText5 = "If you have repetitive tasks that require a lot of time and resources, you can certainly benefit from our services. Online orders and reservations,
                     automatic response and support chats, various software or a website are within our scope of services.";
        $btn5 = "btn5";
        $card5 = "card5";

        $faqTitle6 = "Do you offer support to companies and their IT professionals?";
        $faqText6 = "Yes. If you already have IT professionals who sometimes need consulting services, we are the right team for you. You can certainly
                     benefit from our partner network, experience in programming, web development, graphic design, maintenance etc.";
        $btn6 = "btn6";
        $card6 = "card6";

        $faqTitle7 = "Do you conclude project partnership contracts with other companies?";
        $faqText7 = "It is our pleasure to learn from and work with other companies on common projects.";
        $btn7 = "btn7";
        $card7 = "card7";
    @endphp
    <x-title-section-pages :title="$title"></x-title-section-pages>

    <div class="top-section flex flex-col md:flex-row max-w-6xl mt-0 sm:mt-10 mb-32 mx-auto">
        <div class="faq flex-1">
            <x-faq :faqTitle="$faqTitle1" :faqText="$faqText1" :btn="$btn1" :card="$card1"></x-faq>
            <x-faq :faqTitle="$faqTitle2" :faqText="$faqText2" :btn="$btn2" :card="$card2"></x-faq>
            <x-faq :faqTitle="$faqTitle3" :faqText="$faqText3" :btn="$btn3" :card="$card3"></x-faq>
            <x-faq :faqTitle="$faqTitle4" :faqText="$faqText4" :btn="$btn4" :card="$card4"></x-faq>
            <x-faq :faqTitle="$faqTitle5" :faqText="$faqText5" :btn="$btn5" :card="$card5"></x-faq>
            <x-faq :faqTitle="$faqTitle6" :faqText="$faqText6" :btn="$btn6" :card="$card6"></x-faq>
            <x-faq :faqTitle="$faqTitle7" :faqText="$faqText7" :btn="$btn7" :card="$card7"></x-faq>
        </div>
        <div class="faq-image flex-1" data-aos-duration="2000" data-aos="fade-left" data-aos-easing="ease-out-cubic">
            <img src="{{asset('img/faq-top.png')}}" alt="frequently-asked-questions">
        </div>
    </div>

    <div class="bottom-section flex flex-col md:flex-row max-w-6xl mx-auto">
        <div class="flex-1 support-img" data-aos-duration="1500" data-aos="fade-right" data-aos-easing="ease-out-cubic">
            <img src="{{ asset('img/faqsupport.png') }}" alt="support" class="block ml-auto">
        </div>
        <div class="flex-1 support-content mt-7 ml-10">
            <h3 class="text-titleRed text-3xl font-bold font-weight-bolder text-left mb-3 mt-5 sm:mt-0 text-center sm:text-left">Need help?</h3>
            <h2 class="text-titleBlack text-3xl font-weight-bolder break-words text-wrap px-2 sm:px-0 text-center sm:text-left">Our support team will assist you</h2>
            <div class="button text-center sm:text-left mt-16" data-aos="fade-up" data-aos-duration="2000">
                <a href="{{route('contact')}}" class="bg-gradient-to-r from-red-500 to-red-900 text-white rounded-t-3xl rounded-b-3xl py-4 px-12">Call us now</a>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function(){

            $("#btn1").click(function(){
                $("#card1").slideToggle(800);
            });

            $("#btn2").click(function(){
                $("#card2").slideToggle(1000);
            });

            $("#btn3").click(function(){
                $("#card3").slideToggle(1000);
            });

            $("#btn4").click(function(){
                $("#card4").slideToggle(1000);
            });

            $("#btn5").click(function(){
                $("#card5").slideToggle(1000);
            });

            $("#btn6").click(function(){
                $("#card6").slideToggle(1000);
            });

            $("#btn7").click(function(){
                $("#card7").slideToggle(1000);
            });
        });
    </script>



@endsection

