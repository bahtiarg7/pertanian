<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){

    }

    public function visimisi(){
        return view('frontend.visimisi');
    }

    public function selayang_pandang(){
        return view('frontend.selayang_pandang');
    }

    public function peta(){
        return view('frontend.peta');
    }
}
