<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{

    public function analysis(){
        return view('web.analysis');
    }

    public function applications(){
        return view('web.applications');
    }

    public function design(){
        return view('web.design');
    }

    public function hosting(){
        return view('web.hosting');
    }

    public function prices(){
        return view('web.prices');
    }

    public function shop(){
        return view('web.shop');
    }

}
