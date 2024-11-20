<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\BeritaKategori;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    public function index()
    {
        // Ambil 10 berita per halaman (bisa disesuaikan)
        $news = Berita::latest()->paginate(10);
        $categories = BeritaKategori::leftJoin('berita', 'berita_kategori.id', '=', 'berita.berita_kategori_id')
                            ->select('berita_kategori.id', 'berita_kategori.name', DB::raw('COUNT(berita.id) as used_count'))
                            ->groupBy('berita_kategori.id', 'berita_kategori.name')
                            ->orderBy('berita_kategori.name')
                            ->get();

        // Kirim data berita ke view
        // return view('frontend.berita',compact('news'))->with('pagination', 'vendor.pagination.custom');
        return view('frontend.berita',compact('news','categories'));
    }
}
