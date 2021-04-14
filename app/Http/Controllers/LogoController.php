<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function logo(){
        return view('logo.logo');
    }

    public function animation(){
        return view('logo.animationlogo');
    }

    public function brand(){
        return view('logo.brand');
    }

    public function threeD(){
        return view('logo.3dlogo');
    }
}
