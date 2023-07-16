<?php

namespace App\Http\Controllers;

use App\Charts\PegawaiChart;
use App\Models\Pegawai;
use App\Models\Presensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PresensiRequest;
use RealRashid\SweetAlert\Facades\Alert;

class PresensiController extends Controller
{
    public function index(PegawaiChart $chart)
    {
        $pegawai = Pegawai::where('user_id', Auth::user()->id)->get();
        $presensi = Presensi::where('pegawai_id', Auth::user()->id)->get();
        return view('pegawai.presensi', compact('presensi', 'pegawai'), ['chart' => $chart->build()]);
    }

    public function store(PresensiRequest $request)
    {
        Presensi::create([
            'pegawai_id'        => Auth::user()->id,
            'tanggal_presensi'  => $request->tanggal_presensi,
            'jam_masuk'        => $request->jam_masuk,
            'keterangan'        => $request->keterangan,
            'jam_keluar'         => $request->jam_keluar,
        ]);

        Alert::success('PRESENSI BERHASIL', 'Anda berhasil mengisi data presensi');
        return redirect()->to('pegawai/index');
    }

    public function show(string $id)
    {
        $presensi = Presensi::findOrFail($id);
        return view('admin.detail', compact('presensi'));
    }

    public function edit(string $id)
    {
        $presensi = Presensi::findOrFail($id);
        return view('pegawai.editpresensi', compact('presensi'));
    }

    public function update(Request $request, string $id)
    {
        $presensi = Presensi::findOrFail($id);
        $presensi->update($request->all());
        Alert::success('PRESENSI BERHASIL', 'Anda berhasil mengisi jam keluar, presensi selesai');
        return redirect()->to('pegawai/presensi');
    }

    public function list()
    {
        $pegawai = Pegawai::where('user_id', Auth::user()->id)->get();
        $presensi = Presensi::where('pegawai_id', Auth::user()->id)->get();
        return view('pegawai.listpresensi', compact(['pegawai', 'presensi']));
    }
}
