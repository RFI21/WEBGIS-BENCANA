<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GaleriWisata;

class WisataKuliner extends Model
{
    // Tentukan nama tabel secara manual
    protected $table = 'wisata_kuliner';

    protected $fillable = [
        'nama','deskripsi','alamat','jam_mulai','jam_selesai','fasilitas','gambar','harga','kontak','website','status','lokasi'
    ];
 

    public function galeri_kuliner()
{
    return $this->hasMany(GaleriWisata::class,'wisata_id','id');
}
}
