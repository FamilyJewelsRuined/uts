<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKeberangkatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'paket_id',
        'tanggal_keberangkatan',
        'tanggal_kepulangan',
        'kuota',
        'status',
    ];

    public function paketUmroh()
    {
        return $this->belongsTo(PaketUmroh::class);
    }

    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}
