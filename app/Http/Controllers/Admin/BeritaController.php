<?php

namespace App\Http\Controllers\Admin;

use App\Models\Berita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\BeritaKategori;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->get();
        return view('admin.berita.index', compact('berita'));
    }

    public function create()
    {
        $beritaKategori = BeritaKategori::all();
        return view('admin.berita.create', compact('beritaKategori'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'judul' => 'required|string|max:255',
                'deskripsi' => 'required|string',
                'berita_kategori_id' => 'required|exists:berita_kategori,id',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'status' => 'required|in:draft,publish',
            ], [
                'judul.required' => 'Judul tidak boleh kosong.',
                'deskripsi.required' => 'Deskripsi tidak boleh kosong.',
                'image.required' => 'Gambar tidak boleh kosong.',
                'image.image' => 'File harus berupa gambar.',
                'image.mimes' => 'File harus berupa jpeg,png,jpg,gif,svg.',
                'image.max' => 'File maksimal 2MB.',
            ]);
            $slug = Str::slug($request->judul, '-');
            $slugCount = Berita::where('slug', $slug)->count();
            if ($slugCount > 0) {
                $slug = $slug . '-' . ($slugCount + 1);
            }
            $image = null;
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = Str::uuid() . '.' . $extension;
                $file->move(public_path('upload/berita/'), $fileName);
                $image = 'upload/berita/' . $fileName;
            }
            $berita = Berita::create([
                'judul' => $request->judul,
                'slug' => $slug,
                'berita_kategori_id' => $request->berita_kategori_id,
                'deskripsi' => $request->deskripsi,
                'image' => $image,
                'status' => $request->status ?? 'publish',
                'slider' => $request->slider ?? 'N',
            ]);

            Alert::toast('Berita berhasil ditambahkan', 'success');
            return redirect()->route('berita.index');
        } catch (\Exception $e) {
            Alert::toast('Terjadi kesalahan: ' . $e->getMessage(), 'error');
            return redirect()->back()->withInput();
        }
    }

    public function generateSlug(Request $request)
    {
        $judul = $request->judul;
        $slug = Str::slug($judul, '-');
        $slugCount = \App\Models\Berita::where('slug', $slug)->count();
        if ($slugCount > 0) {
            $slug = $slug . '-' . ($slugCount + 1);
        }
        return response()->json(['slug' => $slug]);
    }
}
