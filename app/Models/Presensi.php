<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'pegawai_id',
        'tanggal_presensi',
        'jam_masuk',
        'keterangan',
        'jam_keluar',
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
