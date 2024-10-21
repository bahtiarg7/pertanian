<?php

namespace App\Exports;

use App\Models\Letter;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;

// class SuratExport implements FromCollection
// {
//     /**
//     * @return \Illuminate\Support\Collection
//     */
//     public function collection()
//     {
//         return Letter::all();
//     }
// }

class SuratExport implements FromView
{
    public function view(): View
    {
        return view('admin.letter.excel', [
            'title' => 'Surat',
            'items' => Letter::all()
        ]);
    }
}
