<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\BeritaKategori;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriContorller extends Controller
{
    public function page_index_kategori()
    {
        $kategori = BeritaKategori::latest()->get();
        return view('admin.berita.kategori.page_index', compact('kategori'));
    }

    public function page_store_kategori(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Nama kategori tidak boleh kosong.',
        ]);

        $kategori = BeritaKategori::create([
            'name' => $request->name,
        ]);

        Alert::toast('kategori berhasil ditambahkan','success');
        return redirect()->back();
    }

    public function update_page(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Nama kategori tidak boleh kosong.',
        ]);

        $kategori = BeritaKategori::findOrFail($id);
        $kategori->update(['name' => $request->name]);

        Alert::toast('Kategori berhasil diupdate', 'success');
        return redirect()->back();
    }

    public function page_destroy($id)
    {

        $kategori = BeritaKategori::findOrFail($id);
        $kategori->delete();

        Alert::toast('Kategori berhasil dihapus', 'success');
        return redirect()->back();
    }
}
