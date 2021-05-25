<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function starter(){
        return view('email.starter');
    }

    public function medium(){
        return view('email.medium');
    }

    public function advanced(){
        return view('email.advanced');
    }

    public function special(){
        return view('email.special');
    }
}
