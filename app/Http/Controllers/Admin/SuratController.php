<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Letter;
use Illuminate\Http\Request;
use App\Models\Letter_disposition;
use App\Http\Controllers\Controller;
use App\Models\Disposition;
use App\Models\Letter_confirmation;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SuratController extends Controller
{
    public function create()
    {
        $letter = Letter::all();
        return view('admin.letter.create',compact('letter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validate($request,[
            'no_letter'    => 'required',
            'date_entry'    => 'required',
            'subject' => 'required',
            'origin' => 'required',
            'date_receipt' => 'required',
            'document'    => 'required|mimes:pdf,doc,xlxs,docx',
        ]);
        $document = $request->file('document');
        $document->storeAs('public/document', $document->hashName());

        $letter = Letter::create([
            'no_letter' => $request->no_letter,
            'date_entry' => $request->date_entry,
            'subject' => $request->subject,
            'origin' => $request->origin,
            'date_receipt' => $request->date_receipt,
            'document' => $document->hashName(),
        ]);

        $description = NULL;
        $stages = 0;

        $recipient = User::where('role','kadin')->first();

        if (!$recipient) {
            abort(404);
        }

        $disposition = Disposition::where('name','Default')->first();

        if (!$disposition) {
            abort(404);
        }

        $dataToInsert[] = [
            'letter_id' => $letter->id,
            'disposition_id' => $disposition->id,
            'recipient_id' => $recipient->id,
            'sender_id' => Auth::user()->id,
            'description' => $description,
            'stages' => $stages,
            'created_at' => now(),
        ];

        $letter_disposition = Letter_disposition::insert($dataToInsert);
        
        if ($letter_disposition) {
            Alert::success('Berhasil Ditambahkan');
            return redirect()->route('index');
        }else{
            return redirect()->back()->withErrors($validator)->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {   
       $letter   = Letter::findOrFail($id);
        return view('admin.letter.edit',compact('letter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Letter $letter)
    {
        $validator = $this->validate($request,[
            'no_letter'    => 'required',
            'date_entry'    => 'required',
            'subject' => 'required',
            'origin' => 'required',
            'date_receipt' => 'required',
            'document'    => 'required|mimes:pdf,doc,xlxs,docx',
        ]);
        $document = $request->file('document');
        $document->storeAs('public/document', $document->hashName());

        $letter = Letter::create([
            'no_letter' => $request->no_letter,
            'date_entry' => $request->date_entry,
            'subject' => $request->subject,
            'origin' => $request->origin,
            'date_receipt' => $request->date_receipt,
            'document' => $document->hashName(),
        ]);
           
        return redirect()->route('index')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   public function destroy( $id)
    {   
        $letter = Letter::findOrFail($id);
        $letter->delete();
        Alert::success('Berhasil Dihapus');
        return redirect()->back()->with('success', 'Data Berhasil dihapus');

    }

    public function disposisi(Request $request)
    {
        // Validasi request
        $validator = $this->validate($request, [
            'surat' => 'required',
            'disposisi' => 'required',
            'user' => 'required|array', // Pastikan 'user' adalah array
            'keterangan' => 'nullable|string' // Pastikan 'keterangan' adalah string jika ada
        ]);

        if (Auth::user()->role == 'admin') {
            $stages = 0;
        }elseif(Auth::user()->role == 'kadin'){
            $stages = 1;
        }elseif(Auth::user()->role == 'sekdin'){
            $stages = 2;
        }

        // Menetapkan deskripsi jika tersedia, atau null jika tidak
        $description = $request->input('keterangan', null);

        // Mendapatkan timestamp saat ini
        $created_at = now();

        // Mengumpulkan data untuk batch insert
        $dataToInsert = [];
        foreach ($request->input('user') as $userId) {
            $dataToInsert[] = [
                'letter_id' => $request->input('surat'),
                'disposition_id' => $request->input('disposisi'),
                'recipient_id' => strval($userId),
                'sender_id' => Auth::user()->id,
                'description' => $description,
                'stages' => $stages,
                'created_at' => $created_at
            ];
        }

        // Insert data ke dalam database jika ada data untuk dimasukkan
        if (!empty($dataToInsert)) {
            Letter_disposition::insert($dataToInsert);
            $letter = Letter::findOrFail($request->surat);
            $letter->disposition_status = 'Y';
            $letter->save();

            Alert::success('Berhasil Ditambahkan');
        } else {
            Alert::error('Gagal Ditambahkan');
        }

        return redirect()->back()->withInput();
    }

    public function terima( $id)
    {   
        $letter = Letter_disposition::findOrFail($id);
        $description = NULL;
        $confirmation = Letter_confirmation::create([
            'letter_disposition_id' => $id,
            'users_id' => Auth::user()->id,
            'description' => $description,
            'recipient_status' => 'A'
        ]);
        if ($confirmation) {
            Alert::success('Berhasil Diterima');
            return redirect()->back()->with('success', 'Data Berhasil diterima');
        }else{
            Alert::success('Gagal Diterima');
            return redirect()->back()->with('success', 'Data Berhasil diterima');
        }

    }

    public function tolak( $id)
    {   
        $letter = Letter_disposition::findOrFail($id);
        $description = NULL;
        $confirmation = Letter_confirmation::create([
            'letter_disposition_id' => $id,
            'users_id' => Auth::user()->id,
            'description' => $description,
            'recipient_status' => 'R'
        ]);
        if ($confirmation) {
            Alert::success('Berhasil Ditolak');
            return redirect()->back()->with('success', 'Data Berhasil ditolak');
        }else{
            Alert::success('Gagal Ditolak');
        return redirect()->back()->with('success', 'Data Berhasil ditolak');
        }

    }

}
