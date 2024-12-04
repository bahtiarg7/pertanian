<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::find(1);
        return view('admin.setting.index', compact('setting'));
    }

    public function update(Request $request)
    {
        try {
            // Validasi input
            $request->validate([
                'nama_website' => 'nullable|string|max:255',
                'seo_description' => 'nullable|string|max:255',
                'seo_keyword' => 'nullable|string|max:255',
                'seo_author' => 'nullable|string|max:255',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'footer' => 'nullable|string|max:255',
            ]);

            $setting = Setting::first();

            if (!$setting) {
                $setting = new Setting();
            }

            // Menangani logo
            if ($request->hasFile('logo')) {

                if ($setting->logo && file_exists(public_path('upload/setting/' . $setting->logo))) {
                    unlink(public_path('upload/setting/' . $setting->logo));
                }
                $logo = $request->file('logo');
                $logo_name = time() . '.' . $logo->getClientOriginalExtension();
                $logo->move(public_path('upload/setting'), $logo_name);
            } else {
                $logo_name = $setting->logo;
            }


            if ($request->hasFile('favicon')) {
                if ($setting->favicon && file_exists(public_path('upload/setting/' . $setting->favicon))) {
                    unlink(public_path('upload/setting/' . $setting->favicon));
                }
                $favicon = $request->file('favicon');
                $favicon_name = time() . '.' . $favicon->getClientOriginalExtension();
                $favicon->move(public_path('upload/setting'), $favicon_name);
            } else {
                $favicon_name = $setting->favicon;
            }


            $setting->nama_website = $request->nama_website ?? $setting->nama_website;
            $setting->seo_description = $request->seo_description ?? $setting->seo_description;
            $setting->seo_keyword = $request->seo_keyword ?? $setting->seo_keyword;
            $setting->seo_author = $request->seo_author ?? $setting->seo_author;
            $setting->logo = $logo_name;
            $setting->favicon = $favicon_name;
            $setting->footer = $request->footer ?? $setting->footer;

            $setting->save();

            Alert::toast('Setting berhasil diupdate', 'success');
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::toast('Setting gagal diupdate: ' . $e->getMessage(), 'error');
            return redirect()->back();
        }
    }

}
