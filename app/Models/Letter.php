<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Letter extends Model
{
    use HasFactory;
    protected $table = 'letter';
    protected $guarded = [];
    public function letter_disposition(){
        return $this->hasMany(Letter_disposition::class);
    }
    public function user($id){
        $s = "";
        $user = User::findOrFail($id);
        if ($user) {
            $s = $user->name;
        }
        return $s;
    }
    public function disposition($id){
        $s = "";
        $data = Disposition::where('id',$id)->first();
        if ($data) {
            $s = $data->name;
        }
        return $s;
    }
    public function other($id){
        $s = "";
        $data = Letter_disposition::where('id',$id)->first();
        if ($data) {
            $s = $data->description;
        }
        return $s;
    }
    public function confirmation($id){
        $s = "";
        $confirmation = Letter_confirmation::where('letter_disposition_id',$id)->first();
        if ($confirmation) {
            $s = $confirmation->recipient_status;
        }
        return $s;
    }
    public function dateConfirmation($id){
        $s = "";
        $confirmation = Letter_confirmation::where('letter_disposition_id',$id)->first();
        if ($confirmation) {
            $s = $confirmation->created_at;
        }
        return $s;
    }
}
