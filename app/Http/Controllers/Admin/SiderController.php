<?php

namespace App\Http\Controllers\Admin;

use App\Models\Silder;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class SiderController extends Controller
{
    public function index()
    {
        $silder = Silder::latest()->get();
        return view('admin.silder.index', compact('silder'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        try {

            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $fileName = Str::uuid() . '.' . $extension;
                $file->move(public_path('upload/silder/'), $fileName);
                $image = $fileName;
            } else {
                throw new \Exception('File gambar tidak valid atau tidak ditemukan.');
            }

            $silder = Silder::create([
                'title' => $request->title,
                'deskripsi' => $request->deskripsi,
                'image' => $image,
                'is_active' => true,
            ]);
            Alert::toast('Slider berhasil ditambahkan', 'success');
            return redirect()->back();

        } catch (\Exception $e) {
            Alert::toast($e->getMessage(), 'error');
            return redirect()->back();
        }
    }

    public function updateStatus(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:silder,id',
            'is_active' => 'required|boolean',
        ]);

        try {
            $silder = Silder::findOrFail($request->id);
            $silder->is_active = $request->is_active;
            $silder->save();

            return response()->json(['success' => true], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
