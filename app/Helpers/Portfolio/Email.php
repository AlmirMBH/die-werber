<?php

namespace App\Helpers\Portfolio;

class Email
{

    public static function getSliderList(){
        return [
            'chesselhuus-1' => [
                'img' => 'portfolio-email-chesselhuus.png',
                'url' => 'https://www.chesselhuus.ch/',
                'title' => 'Chesselhuus',
                'alt' => 'chesselhuus'
            ],
            'davos' => [
                'img' => 'portfolio-email-seehof-davos.png',
                'url' => 'https://www.seehofdavos.ch/',
                'title' => 'Seehof Davos',
                'alt' => 'seehof-davos'
            ],
            'rs' => [
                'img' => 'portfolio-email-rs.png',
                'url' => 'https://rs-unternehmungen.ch/',
                'title' => 'RS Unternehmungen',
                'alt' => 'rs-unternehmungen'
            ],
            'chesselhuus' => [ // the same element as the 1st element above added to get slider arrows
                'img' => 'portfolio-email-chesselhuus.png',
                'url' => 'https://www.chesselhuus.ch/',
                'title' => 'Chesselhuus',
                'alt' => 'chesselhuus'
            ],
        ];
    }
}
