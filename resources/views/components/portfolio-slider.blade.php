<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick-theme.css') }}" rel="stylesheet">
    <title></title>
</head>
<body>

    <section class="regular slider web-development">
        @foreach($portfolioList as $client)
            @if(isset($client['img']))
                <div>
                    <img src="{{ asset('img/' . ($client['img'] ?? "") )}}" alt="{{ $client['alt'] ?? "" }}" class="rounded-lg shadow-xl">
                    <p class="text-center text-2xl text-green-700 pt-3"><a href="{{ $client['url'] ?? "" }}"></a>{{ $client['title'] }}</p>
                </div>
            @endif
        @endforeach
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
