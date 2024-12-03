<?php

namespace App\Http\Controllers\Admin;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::find(1);
        return view('admin.profile.index', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        try{
            $request->validate([
                'deskripsi' => 'required',
            ]);

            $profile = Profile::find(1);
            $profile->deskripsi = $request->deskripsi;
            $profile->save();
            Alert::toast('Data berhasil diubah', 'success');
            return redirect()->route('backend.profile.index');
        }catch(\Exception $e){
            Alert::toast('Error : ' . $e->getMessage(), 'error');
            return redirect()->route('backend.profile.index')->withInput();

        }
    }
}
