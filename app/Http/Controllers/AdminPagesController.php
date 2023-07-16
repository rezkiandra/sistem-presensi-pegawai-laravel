<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pegawai;
use App\Models\Presensi;
use App\Charts\AdminChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPagesController extends Controller
{
    public function pegawai()
    {
        $pegawais = Pegawai::all();
        return view('admin.listpegawai', compact('pegawais'));
    }

    public function presensi()
    {
        // $pegawai = Pegawai::where('user_id', Auth::user()->id)->get();
        // $presensi = Presensi::where('pegawai_id', Auth::user()->id)->get();
        $pegawai    = Pegawai::all();
        $presensi   = Presensi::all();
        return view('admin.listpresensi', compact('presensi', 'pegawai'));
    }

    public function user()
    {
        $users = User::all();
        return view('admin.listuser', compact('users'));
    }
}
