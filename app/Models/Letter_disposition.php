<?php

namespace App\Models;


use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Letter_disposition extends Model
{
    use HasFactory;
    protected $table = 'letter_disposition';
    protected $fillable = [
        'letter_id',
        'disposition_id',
        'recipient_id',
        'sender_id',
        'description',
        'recipient_status',
        'stages',
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */

    /**
     * Get the user that owns the LetterDisposition.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'sender_id', 'id');
    }

    public function disposition($id){
        $s = "";
        $data = Disposition::where('id',$id)->first();
        if ($data) {
            $s = $data->name;
        }
        return $s;
    }

    public function senderDisposition($letter_id){
        $s = "";
        $data = Letter_disposition::where('letter_id',$letter_id)->where('sender_id',Auth::user()->id)->first();
        if ($data) {
            $s = "Sender";
        }
        return $s;
    }
    
    public function confirmation($id){
        $s = "";
        $data = Letter_confirmation::where('letter_disposition_id',$id)->where('users_id',Auth::user()->id)->first();
        if ($data) {
            $s = $data->recipient_status;
        }
        return $s;
    }
}
