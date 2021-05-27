<?php

namespace App\Helpers\Portfolio;

class GraphicPortfolio
{
    // GRAPHIC DESIGN PORTFOLIO INDEX PAGE
    public static function getSliderList(){
        return [
            'schrank' => [
                'img' => 'portfolio-logo-schrank.png',
                'url' => 'https://www.schrankspezialist.ch/',
                'title' => 'Der Schrank-Spezialist',
                'alt' => 'der-schrank-spezialist'
            ],
            'cook4you' => [
                'img' => 'portfolio-logo-cook4you.png',
                'url' => '',
                'title' => 'Cook4you',
                'alt' => 'cook-for-you'
                ],
            'chesselhuus' => [
                'img' => 'portfolio-graphic-chesselhuus.png',
                'url' => 'https://www.chesselhuus.ch/',
                'title' => 'Chesselhuus',
                'alt' => 'chesselhuus'
            ],
            'photovoltaik' => [
                'img' => 'portfolio-graphic-photovoltaik.png',
                'url' => 'https://photovoltaik-beratung.ch/',
                'title' => 'Photovoltaik Beratung',
                'alt' => 'photovoltaik'
            ],
            'spinart' => [
                'img' => 'portfolio-graphic-spinart.png',
                'url' => 'https://spinart.ch/',
                'title' => 'Spinart',
                'alt' => 'spinart'
            ],
            'langolo' => [
                'img' => 'portfolio-graphic-langolo.png',
                'url' => '',
                'title' => 'L\'Angolo Italiano',
                'alt' => 'langolo-italiano'
            ],
            'chimichanga' => [
                'img' => 'portfolio-graphic-chimi-changa.png',
                'url' => '',
                'title' => 'Chimi-Changa Pfäffikon',
                'alt' => 'chimi-changa pffäffikon'
            ],
            'burgring' => [
                'img' => 'portfolio-graphic-burgring.png',
                'url' => 'https://burgring.ch/',
                'title' => 'Burgring',
                'alt' => 'burging'
            ],
            'chesselhuus-two' => [
                'img' => 'portfolio-graphic-chesselhuus-two.png',
                'url' => 'https://www.chesselhuus.ch/',
                'title' => 'Chesselhuus',
                'alt' => 'chesselhuus'
            ],
            'flipflop' => [
                'img' => 'portfolio-graphic-flipflop.png',
                'url' => 'https://grass-flipflop.com/',
                'title' => 'Grass FlipFlop',
                'alt' => 'grass-flipflop'
            ]
        ];
    }
}
