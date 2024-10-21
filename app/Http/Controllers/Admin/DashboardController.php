<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Letter;
use App\Models\Disposition;
use App\Http\Controllers\Controller;
use App\Models\Letter_confirmation;
use App\Models\Letter_disposition;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $letter = Letter::all();
        $user = User::where('role','!=','admin')->where('role','!=','kadin')->get();
        $disposition = Disposition::where('id','!=',1)->get();
        $letter_disposition = Letter_disposition::select('letter_disposition.*','letter.no_letter','letter.date_entry','letter.subject','letter.origin','letter.date_receipt','letter.document','letter.disposition_status')->join('letter','letter_disposition.letter_id','letter.id')->where('recipient_id','=',Auth::user()->id)->get();
        $letter_confirmation = Letter_confirmation::where('users_id',AUth::user()->id)->get();
        return view('admin.index',compact('letter','user','disposition','letter_disposition','letter_confirmation'));
    }
}
