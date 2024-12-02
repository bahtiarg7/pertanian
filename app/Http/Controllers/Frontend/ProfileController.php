<?php

namespace App\Http\Controllers\Frontend;

use App\Models\VisiMisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(){

    }

    public function profile(){
        $profile = VisiMisi::find(1);
        return view('frontend.profile', compact('profile'));
    }

    public function tugas_dan_fungsi(){
        $profile = VisiMisi::find(1);
        return view('frontend.tugas_dan_fungsi', compact('profile'));
    }

    public function program_dan_kegiatan(){
        $profile = VisiMisi::find(1);
        return view('frontend.program_dan_kegiatan', compact('profile'));
    }

    public function struktur_organisasi(){
        $profile = VisiMisi::find(1);
        return view('frontend.struktur_organisasi', compact('profile'));
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
