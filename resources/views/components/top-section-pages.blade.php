<section>
    <div class="max-w-6xl flex flex-col md:flex-row mx-auto mt-10">
        <div class="flex-1 mt-8 pl-10 p-5" data-aos-duration="1500" data-aos="fade-right" data-aos-easing="ease-out-cubic">
            <p class="custom-black text-xl font-semibold mb-5"
               data-en="@php echo $topSectionTitleEnglish @endphp"
               data-de="@php echo $topSectionTitleGerman @endphp"
{{--            >@php echo $topSectionTitleGerman @endphp</p>--}}
            >{{$topSectionTitleGerman}}</p>
            <p class="text-base custom-black-paragraph"
               data-en="@php echo $topSectionTextEnglish @endphp"
               data-de="@php echo $topSectionTextGerman @endphp"
            >{{$topSectionTextGerman}}</p>
        </div>
        <div class="flex-1" data-aos-duration="2000" data-aos="fade-left" data-aos-easing="ease-out-cubic">
            <div class="section-image">
                <img src="{{asset('img/'.$topSectionImage)}}" alt="{{ $topSectionAlt }}"/>
            </div>
        </div>
    </div>
</section>
