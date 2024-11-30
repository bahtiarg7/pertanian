<?php

namespace App\Http\Controllers\Admin;

use App\Models\Agenda;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class AgendaController extends Controller
{
    public function index()
    {
        $agenda = Agenda::all();
        return view('admin.agenda.index', compact('agenda'));
    }

    public function store(Request $request)
    {
        try{
            $request->validate([
                'judul' => 'required',
                'tanggal' => 'required',
                'keterangan' => 'required',
                'lokasi' => 'required',
            ]);
            $agenda = Agenda::create([
                'judul' => $request->judul,
                'tanggal' => $request->tanggal,
                'keterangan' => $request->keterangan,
                'lokasi' => $request->lokasi,
            ]);
            Alert::toast('Agenda berhasil ditambahkan', 'success');
            return redirect()->back();
        }catch(\Exception $e){
            Alert::toast($e->getMessage(), 'error');
            return redirect()->back();
        }
    }
}
