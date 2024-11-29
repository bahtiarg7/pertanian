<?php

namespace App\Http\Controllers\Admin;

use App\Models\VisiMisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class VisiMisiController extends Controller
{
    public function index()
    {
        $visimisi = VisiMisi::find(1);
        return view('admin.visimisi.index', compact('visimisi'));

    }

    public function edit($id)
    {
        $visimisi = VisiMisi::find($id);
        return view('admin.visimisi.edit', compact('visimisi'));
    }

    public function update(Request $request, $id)
    {
        try {
            $visimisi = VisiMisi::find($id);
            if (!$visimisi) {
                Alert::toast('Visi Misi not found', 'error');
                return redirect()->route('visimisi.index');
            }
            $request->validate([
                'visi' => 'required',
                'misi' => 'required',
            ]);
            $visimisi->misi = $request->misi;
            $visimisi->visi = $request->visi;
            $visimisi->save();
            Alert::toast('Visi Misi berhasil diupdate', 'success');

        } catch (\Exception $e) {
            Alert::toast('Error: ' . $e->getMessage(), 'error');
        }

        return redirect()->route('backend.visimisi.index');
    }

}
