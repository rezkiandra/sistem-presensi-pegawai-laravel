<?php

namespace App\Http\Controllers;

use App\Charts\PegawaiChart;
use App\Models\Pegawai;
use App\Models\Presensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PegawaiRequest;
use App\Http\Requests\PresensiRequest;
use RealRashid\SweetAlert\Facades\Alert;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PegawaiChart $chart)
    {
        return view('pegawai.index', ['chart' => $chart->build()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pegawai = Pegawai::where('user_id', Auth::user()->id)->get();
        return view('pegawai.create', compact('pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PegawaiRequest $request)
    {
        Pegawai::create([
            'user_id'           => Auth::user()->id,
            'nama_depan'        => $request->nama_depan,
            'nama_belakang'     => $request->nama_belakang,
            'nip'               => $request->nip,
            'pangkat'           => $request->pangkat,
            'golongan'          => $request->golongan,
            'jenkel'            => $request->jenkel,
        ]);

        Alert::success('BERHASIL SIMPAN BIODATA', 'Anda berhasil menyimpan biodata');
        return redirect()->to('pegawai/create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.editbiodata', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update($request->all());
        
        Alert::success('UBAH BIODATA BERHASIL', 'Anda berhasil mengubah biodata');
        return redirect()->route('pegawai.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
