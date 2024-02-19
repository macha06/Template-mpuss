<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    use HasFactory;
    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tahun-terbit',
        'deskripsi',
        'gambar',
        'kategori_id',
        'stok',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
