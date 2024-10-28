<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketUmroh extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_paket',
        'deskripsi',
        'harga',
        'durasi_hari',
        'fasilitas',
    ];

    public function jadwalKeberangkatan()
    {
        return $this->hasMany(JadwalKeberangkatan::class);
    }
}
