<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

class PagesController extends Controller
{

    public function index(){
        return view('index');
    }

    public function about(){
        return view('company.about');
    }

    public function team(){
        return view('company.team');
    }

    public function questions(){
        return view('company.questions');
    }

    public function merchandising(){
        return view('shops.merchandising');
    }


    public function portfolio(){
        return view('portfolio');
    }

    public function contact(){
        Mapper::map(
            53.381128999999990000, -1.470085000000040000,
            [
                'zoom' => 16,
                'draggabble' => true,
                'marker' => false,
                'eventAfterLoad' => 'circleListener(maps[0].shapes[0].circle_0);'
            ]
        );
        return view('contact');
    }

    public function privacy(){
        return view('company.privacy');
    }

    public function bus(){
        return view('bus.busprices');
    }

    public function masks(){
        return view('shops.masks');
    }


}
