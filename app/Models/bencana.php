<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class bencana extends Model
{
    protected $table = 'bencana';

    protected $fillable = [
        'jenis_bencana',
        'tanggal',
        'lokasi',
        'long_lat',
        'terdampak',
        'gambar'
    ];
}
