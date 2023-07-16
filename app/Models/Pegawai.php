<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nama_depan',
        'nama_belakang',
        'nip',
        'pangkat',
        'golongan',
        'jenkel',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function presensi()
    {
        return $this->belongsTo(Presensi::class);
    }
}
