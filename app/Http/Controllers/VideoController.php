<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function twoD(){
        return view('video.2danimation');
    }

    public function threeD(){
        return view('video.3danimation');
    }

    public function prices(){
        return view('video.videoprices');
    }

    public function voice(){
        return view('video.voice');
    }

    public function whiteboard(){
        return view('video.whiteboard');
    }

}
