<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pegawai;
use App\Models\Presensi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    public function laporan_pegawai()
    {
        $pegawais   = Pegawai::get()->all();
        $pdf        = Pdf::loadView('admin.listpegawai', compact('pegawais'));
        return $pdf->setPaper('a4', 'landscape')->stream('list_pegawai.pdf');
    }

    public function laporan_presensi()
    {
        $presensi   = Presensi::get()->all();
        $pdf        = Pdf::loadView('admin.listpresensi', compact('presensi'));
        return $pdf->setPaper('a4', 'landscape')->stream('list_presensi.pdf');
    }

    public function laporan_user()
    {
        $users   = User::get()->all();
        $pdf        = Pdf::loadView('admin.listuser', compact('users'));
        return $pdf->setPaper('a4', 'landscape')->stream('list_user.pdf');
    }
}
