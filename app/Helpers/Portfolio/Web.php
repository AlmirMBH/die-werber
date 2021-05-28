<?php

namespace App\Helpers\Portfolio;

class Web
{

    // WEB PORTFOLIO INDEX PAGE
    public static function getSliderList(){
        return [
            'swiss-hockey-fan' => [
                'img' => 'portfolio-web-swiss-hockey-fan.png',
                'url' => 'https://swiss-hockey-fan.ch/',
                'title' => 'Swiss Hockey Fan'
            ],
            'branschutz' => [
                'img' => 'portfolio-web-brandschutz.png',
                'url' => 'https://www.mp-brandschutz.ch/',
                'title' => 'MP Brandschutz'
            ],
            'bierfascht' => [
                'img' => 'portfolio-web-bierfascht.png',
                'url' => 'https://wetziker-bierfäscht.ch/',
                'title' => 'Bierfäscht'
            ],
            'football' => [
                'img' => 'portfolio-logo-football-expert.png',
                'url' => 'https://fussball-experte.ch/',
                'title' => 'Fussball-Experte'
            ],
            'flipflop' => [
                'img' => 'portfolio-logo-grass-flipflop.png',
                'url' => 'https://grass-flipflop.com/',
                'title' => 'Grass FlipFlop'
            ],
            'spinart' => [
                'img' => 'portfolio-logo-spinart.png',
                'url' => 'https://spinart.ch/',
                'title' => 'Spinart'
            ],
            'chesselhuus' => [
                'img' => 'portfolio-logo-chesselhuus.png',
                'url' => 'https://www.chesselhuus.ch/',
                'title' => 'Chesselhuus'
            ]
        ];
    }
}
