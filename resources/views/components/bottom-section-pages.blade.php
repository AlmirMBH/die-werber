<section class="mt-28">
    <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
        <div class="flex-1">
            <div class="section-image" data-aos="fade-left" data-aos-duration="2000">
                <img src="{{asset('img/'.$bottomSectionImage)}}" alt="{{ $bottomSectionAlt }}"/>
            </div>
        </div>
        <div class="flex-1 ml-10 mt-10 md:mt-0">
            <p class="custom-red text-3xl font-bold mb-5">{{ $bottomSectionTitle }}</p>
            <span class="line-under-section-title mb-10"></span>
            <p class="text-base custom-black-paragraph pr-5" data-aos="fade-up" data-aos-duration="2000">{{ $bottomSectionText }}</p>
        </div>
    </div>
</section>
