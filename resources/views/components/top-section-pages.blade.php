<section>
    <div class="max-w-6xl flex flex-col md:flex-row mx-auto">
        <div class="flex-1 mt-8 pl-10 p-5">
            <p class="custom-black text-xl font-semibold mb-5">{{ $topSectionTitle }}</p>
            <p class="text-base custom-black-paragraph">{{ $topSectionText }}</p>
        </div>
        <div class="flex-1">
            <div class="section-image">
                <img src="{{asset('img/'.$topSectionImage)}}" alt="{{ $topSectionAlt }}"/>
            </div>
        </div>
    </div>
</section>
