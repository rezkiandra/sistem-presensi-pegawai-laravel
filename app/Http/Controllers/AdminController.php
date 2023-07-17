<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pegawai;
use App\Models\Presensi;
use App\Charts\AdminChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index(AdminChart $chart)
    {
        $sakit       = DB::table('presensis')
            ->select([
                DB::raw('count(1) as sakit'),
                DB::raw('DATE(created_at) as tanggal')
            ])
            ->where('keterangan', '=', 'Sakit')
            ->groupBy('tanggal')
            ->orderBy('tanggal', 'ASC')
            ->get();

        $alpa       = DB::table('presensis')
            ->select([
                DB::raw('count(1) as alpa'),
                DB::raw('DATE(created_at) as tanggal')
            ])
            ->where('keterangan', '=', 'Alpa')
            ->groupBy('tanggal')
            ->orderBy('tanggal', 'ASC')
            ->get();

        $izin       = DB::table('presensis')
            ->select([
                DB::raw('count(1) as izin'),
                DB::raw('DATE(created_at) as tanggal')
            ])
            ->where('keterangan', '=', 'Izin')
            ->groupBy('tanggal')
            ->orderBy('tanggal', 'ASC')
            ->get();

        $hadir       = DB::table('presensis')
            ->select([
                DB::raw('count(1) as hadir'),
                DB::raw('DATE(created_at) as tanggal')
            ])
            ->where('keterangan', '=', 'Hadir')
            ->groupBy('tanggal')
            ->orderBy('tanggal', 'ASC')
            ->get();

        $pegawais   = Pegawai::all()->count();
        $users      = User::all()->count();
        return view('admin.index', compact('hadir', 'sakit', 'izin', 'alpa', 'pegawais', 'users'), ['chart' => $chart->build()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $presensi = Presensi::findOrFail($id);
        return view('admin.detail', compact('presensi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $presensi = Presensi::findOrFail($id);
        return view('admin.edit', compact('presensi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();

        Alert::success('HAPUS DATA BERHASIL', 'Data Pegawai berhasil dihapus');
        return redirect()->to('admin/pegawai');
    }
}
