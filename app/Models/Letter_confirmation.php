<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter_confirmation extends Model
{
    use HasFactory;
    protected $table = 'letter_confirmation';
    protected $fillable = [
        'letter_disposition_id',
        'users_id',
        'description',
        'recipient_status',
    ];
}
