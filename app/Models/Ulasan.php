<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    protected $table = 'ulasan';
    use HasFactory;

    protected $fillable = [
        'id_buku',
        'id_user',
        'ulasan',
        'rating',
    ];
}
