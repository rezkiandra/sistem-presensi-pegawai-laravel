<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pegawai;
use App\Models\Presensi;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminPagesController extends Controller
{
    public function pegawai()
    {
        $pegawais = Pegawai::all();
        return view('admin.listpegawai', compact('pegawais'));
    }

    public function presensi()
    {
        $presensi   = Presensi::get();
        return view('admin.listpresensi', compact(['presensi']));
    }

    public function user()
    {
        $users = User::all();
        return view('admin.listuser', compact('users'));
    }
}
