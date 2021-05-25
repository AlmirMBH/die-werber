<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraphicsController extends Controller
{
    public function threeD(){
        return view('graphics.3d');
    }

    public function design(){
        return view('graphics.graphicdesign');
    }

    public function illustrations(){
        return view('graphics.illustrations');
    }

    public function print(){
        return view('graphics.print');
    }
}
