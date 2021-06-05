<div id="faq-card" class="mb-5 shadow-lg p-6 mx-3 sm:mx-0">
    <p class="text-titleBlack font-bold text-xl px-4"
        data-en="@php echo $faqTitleEnglish @endphp"
        data-de="@php echo $faqTitleGerman @endphp">
        {{ $faqTitleGerman }}</p> <span id="{{ $btn }}" class="arrow arrowDown float-right"></span>


    <div id="{{ $card }}" class="hidden">
        <p class="mt-5 text-lg" style="color: #ABABAB"
           data-en="@php echo $faqTextEnglish @endphp"
           data-de="@php echo $faqTextGerman @endphp">
            {{ $faqTextGerman }}
        </p>
    </div>
</div>
