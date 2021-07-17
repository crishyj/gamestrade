<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function faq(){
        return view('front.faq');
    }

    public function delivery(){
        return view('front.delivery');
    }
}
