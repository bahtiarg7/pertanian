<?php

namespace App\Http\Controllers\Frontend;

use App\Models\VisiMisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(){

    }

    public function visimisi(){
        $visimisi = VisiMisi::find(1);
        return view('frontend.visimisi', compact('visimisi'));
    }

    public function selayang_pandang(){
        return view('frontend.selayang_pandang');
    }

    public function peta(){
        return view('frontend.peta');
    }
}
