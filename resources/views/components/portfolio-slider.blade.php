<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
</head>
<body>

<section class="regular slider web-development">

    <div>
        <img src="{{ asset('img/' . ($img1 ?? "") )}}" alt="swiss-hockey-fan" class="rounded-lg shadow-xl">
        <p class="text-center text-2xl text-green-700 pt-3"><a href="{{ $url1 ?? "" }}"></a>Swiss Hockey Fan</p>
    </div>
    <div>
        <img src="{{asset('img/' . ($img2 ?? "") )}}" alt="mp-brandschutz" class="rounded-lg shadow-xl">
        <p class="text-center text-2xl text-green-700 pt-3"><a href="{{ $url2 ?? "" }}">MP Brandschutz</a>
        </p>
    </div>
    <div>
        <img src="{{asset('img/' . ($img3 ?? "") )}}" alt="bierfäscht" class="rounded-lg shadow-xl">
        <p class="text-center text-2xl text-green-700 pt-3"><a href="{{ $url3 ?? "" }}">Bierfäscht</a>
        </p>
    </div>
    <div>
        <img src="{{asset('img/' . ($img4 ?? "") )}}" alt="football-expert" class="rounded-lg shadow-xl">
        <p class="text-center text-2xl text-green-700 pt-3"><a href="{{ $url4 ?? "" }}">Fussball-Experte</a>
        </p>
    </div>
    <div>
        <img src="{{asset('img/' . ($img5 ?? "") )}}" alt="grass-flipflop" class="rounded-lg shadow-xl">
        <p class="text-center text-2xl text-green-700 pt-3"><a href="{{ $url5 ?? "" }}">Grass FlipFlop</a>
        </p>
    </div>
    <div>
        <img src="{{asset('img/' . ($img6 ?? "") )}}" alt="spinart" class="rounded-lg shadow-xl">
        <p class="text-center text-2xl text-green-700 pt-3"><a href="{{ $url6 ?? "" }}">Spinart</a>
        </p>
    </div>
    <div>
        <img src="{{asset('img/' . ($img7 ?? "") )}}" alt="chesselhuus" class="rounded-lg shadow-xl">
        <p class="text-center text-2xl text-green-700 pt-3"><a href="{{ $url7 ?? "" }}">Chesselhuus</a>
        </p>
    </div>


</section>

<section class="regular slider graphic-design">
    <div><img src="{{asset('img/portfolio-web-swiss-hockey-fan.png')}}" class="rounded-lg shadow-xl"></div>
    <div><img src="{{asset('img/portfolio-web-swiss-hockey-fan.png')}}" class="rounded-lg shadow-xl"></div>
    <div><img src="{{asset('img/portfolio-web-swiss-hockey-fan.png')}}" class="rounded-lg shadow-xl"></div>
    <div><img src="{{asset('img/portfolio-web-swiss-hockey-fan.png')}}" class="rounded-lg shadow-xl"></div>
    <div><img src="{{asset('img/portfolio-web-swiss-hockey-fan.png')}}" class="rounded-lg shadow-xl"></div>
    <div><img src="{{asset('img/portfolio-web-swiss-hockey-fan.png')}}" class="rounded-lg shadow-xl"></div>
</section>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="{{ asset('js/slick.js') }}" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
        $(".regular").slick({
            dots: true,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            prevArrow:"<img class='a-left control-c prev slick-prev' src='https://i.ibb.co/Vgp5DdK/fav-left.png'>",
            nextArrow:"<img class='a-right control-c next slick-next' src='https://i.ibb.co/j8mh0Ky/fav-right.png'>",
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    });
</script>

</body>
</html>
