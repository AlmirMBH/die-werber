<?php

namespace App\Helpers\Portfolio;

class Logo
{
    public static function getSliderList(){
        return [
            'football-expert' => [
                'img' => 'portfolio-logo-football-expert.png',
                'url' => 'https://fussball-experte.ch/prognose',
                'title' => 'Fussball-Experte',
                'alt' => 'fussball-experte'
            ],
            'swisshockeyfan' => [
                'img' => 'portfolio-logo-swiss-hockey-fan.png',
                'url' => 'https://www.swiss-hockey-fan.ch/',
                'title' => 'SwissHockeyFan',
                'alt' => 'swiss-hockey-fan'
            ],
            'chesselhuus' => [
                'img' => 'portfolio-logo-chesselhuus.png',
                'url' => 'https://www.chesselhuus.ch/',
                'title' => 'Chesselhuus',
                'alt' => 'chesselhuus'
            ],
            'flipflop' => [
                'img' => 'portfolio-logo-flipflop.png',
                'url' => 'http://kunstrasen-flipflops.ch/',
                'title' => 'FlipFlop',
                'alt' => 'flipflop'
            ],
        ];
    }
}
