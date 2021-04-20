<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
