<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BeritaKategori extends Model
{
    use HasFactory;
    protected $table = 'berita_kategori';
    protected $guarded = [];

    public function berita()
    {
        return $this->hasMany(Berita::class, 'berita_kategori_id');
    }
}
