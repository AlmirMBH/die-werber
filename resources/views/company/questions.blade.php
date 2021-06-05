@extends('layouts.app')

@section('title', 'Questions')

@section('content')
    @php
        // REFACTOR!: move Language directory from Helpers to resources/lang
        // If possible, adjust only this part of code: "App\Helpers\Languages\Index"
            $language = App\Helpers\Languages\Questions::getLanguages();
    @endphp

    <x-title-section-pages :titleEnglish="$language['en']['title']" :titleGerman="$language['de']['title']"></x-title-section-pages>

    <div class="top-section flex flex-col md:flex-row max-w-6xl mt-0 sm:mt-10 mb-32 mx-auto">
        <div class="faq flex-1">
            {{-- texts for the faq section are in helper/languages/questions.php; x-faq is in views/components--}}
            <x-faq :faqTitleEnglish="$language['en']['faq-title-1']" :faqTitleGerman="$language['de']['faq-title-1']"
                   :faqTextEnglish="$language['en']['faq-text-1']" :faqTextGerman="$language['de']['faq-text-1']"
                   :btn="$language['btn1']" :card="$language['card1']">
            </x-faq>
            <x-faq :faqTitleEnglish="$language['en']['faq-title-2']" :faqTitleGerman="$language['de']['faq-title-2']"
                   :faqTextEnglish="$language['en']['faq-text-2']" :faqTextGerman="$language['de']['faq-text-2']"
                   :btn="$language['btn2']" :card="$language['card2']">
            </x-faq>
            <x-faq :faqTitleEnglish="$language['en']['faq-title-3']" :faqTitleGerman="$language['de']['faq-title-3']"
                   :faqTextEnglish="$language['en']['faq-text-3']" :faqTextGerman="$language['de']['faq-text-3']"
                   :btn="$language['btn3']" :card="$language['card3']">
            </x-faq>
            <x-faq :faqTitleEnglish="$language['en']['faq-title-4']" :faqTitleGerman="$language['de']['faq-title-4']"
                   :faqTextEnglish="$language['en']['faq-text-4']" :faqTextGerman="$language['de']['faq-text-4']"
                   :btn="$language['btn4']" :card="$language['card4']">
            </x-faq>
            <x-faq :faqTitleEnglish="$language['en']['faq-title-5']" :faqTitleGerman="$language['de']['faq-title-5']"
                   :faqTextEnglish="$language['en']['faq-text-5']" :faqTextGerman="$language['de']['faq-text-5']"
                   :btn="$language['btn5']" :card="$language['card5']">
            </x-faq>
            <x-faq :faqTitleEnglish="$language['en']['faq-title-6']" :faqTitleGerman="$language['de']['faq-title-6']"
                   :faqTextEnglish="$language['en']['faq-text-6']" :faqTextGerman="$language['de']['faq-text-6']"
                   :btn="$language['btn6']" :card="$language['card6']">
            </x-faq>
            <x-faq :faqTitleEnglish="$language['en']['faq-title-7']" :faqTitleGerman="$language['de']['faq-title-7']"
                   :faqTextEnglish="$language['en']['faq-text-7']" :faqTextGerman="$language['de']['faq-text-7']"
                   :btn="$language['btn7']" :card="$language['card7']">
            </x-faq>

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
            <h3 class="text-titleRed text-3xl font-bold font-weight-bolder text-left mb-3 mt-5 sm:mt-0 text-center sm:text-left"
            data-en="Need help?" data-de="Brauchen Sie Hilfe?">Brauchen Sie Hilfe?</h3>
            <h2 class="text-titleBlack text-3xl font-weight-bolder break-words text-wrap px-2 sm:px-0 text-center sm:text-left"
            data-en="Our support team will assist you" data-de="Unser Support-Team hilft Ihnen gerne weiter">
                Unser Support-Team hilft Ihnen gerne weiter
            </h2>
            <div class="button text-center sm:text-left mt-16" data-aos="fade-up" data-aos-duration="2000">
                <a href="{{route('contact')}}" class="bg-gradient-to-r from-red-500 to-red-900 text-white rounded-t-3xl rounded-b-3xl py-4 px-12"
                data-en="Call us now" data-de="Rufen Sie uns jetzt an">Rufen Sie uns jetzt an</a>
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

