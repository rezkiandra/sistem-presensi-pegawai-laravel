<?php

namespace App\Charts;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class PegawaiChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\AreaChart
    {
        return $this->chart->areaChart()
            ->setTitle('Grafik Presensi Pegawai 3 Hari Terakhir')
            ->setSubtitle('Jumlah Keterangan = Hadir, Sakit, Izin, Alpa')
            ->addData('Hadir', [
                DB::table('presensis')
                    ->select([
                        DB::raw('count(*) as hadir'),
                        DB::raw('DATE(created_at) as tanggal')
                    ])
                    ->groupBy('tanggal')
                    ->whereRaw('pegawai_id = ?', Auth::user()->id)
                    ->whereRaw('keterangan = ?', 'Hadir')
                    ->whereRaw('DATE(created_at) <= ?', [date('Y-m-d', strtotime('-2 days'))])
                    ->orderBy('tanggal', 'ASC')
                    ->get()
                    ->count(),
                DB::table('presensis')
                    ->select([
                        DB::raw('count(*) as hadir'),
                        DB::raw('DATE(created_at) as tanggal')
                    ])
                    ->groupBy('tanggal')
                    ->whereRaw('pegawai_id = ?', Auth::user()->id)
                    ->whereRaw('keterangan = ?', 'Hadir')
                    ->whereRaw('DATE(created_at) < ?', [date('Y-m-d', strtotime('-1 days'))])
                    ->orderBy('tanggal', 'ASC')
                    ->get()
                    ->count(),
                DB::table('presensis')
                    ->select([
                        DB::raw('count(*) as hadir'),
                        DB::raw('DATE(created_at) as tanggal')
                    ])
                    ->groupBy('tanggal')
                    ->whereRaw('pegawai_id = ?', Auth::user()->id)
                    ->whereRaw('keterangan = ?', 'Hadir')
                    ->whereRaw('DATE(created_at) = ?', [date('Y-m-d')])
                    ->orderBy('tanggal', 'ASC')
                    ->get()
                    ->count(),
            ])
            ->addData('Sakit', [
                DB::table('presensis')
                    ->select([
                        DB::raw('count(*) as sakit'),
                        DB::raw('DATE(created_at) as tanggal')
                    ])
                    ->groupBy('tanggal')
                    ->whereRaw('pegawai_id = ?', Auth::user()->id)
                    ->whereRaw('keterangan = ?', 'Sakit')
                    ->whereRaw('DATE(created_at) <= ?', [date('Y-m-d', strtotime('-2 days'))])
                    ->orderBy('tanggal', 'ASC')
                    ->get()
                    ->count(),
                DB::table('presensis')
                    ->select([
                        DB::raw('count(*) as sakit'),
                        DB::raw('DATE(created_at) as tanggal')
                    ])
                    ->groupBy('tanggal')
                    ->whereRaw('pegawai_id = ?', Auth::user()->id)
                    ->whereRaw('keterangan = ?', 'Sakit')
                    ->whereRaw('DATE(created_at) < ?', [date('Y-m-d', strtotime('-1 days'))])
                    ->orderBy('tanggal', 'ASC')
                    ->get()
                    ->count(),
                DB::table('presensis')
                    ->select([
                        DB::raw('count(*) as sakit'),
                        DB::raw('DATE(created_at) as tanggal')
                    ])
                    ->groupBy('tanggal')
                    ->whereRaw('pegawai_id = ?', Auth::user()->id)
                    ->whereRaw('keterangan = ?', 'Sakit')
                    ->whereRaw('DATE(created_at) = ?', [date('Y-m-d')])
                    ->orderBy('tanggal', 'ASC')
                    ->get()
                    ->count(),
            ])
            ->addData('Izin', [
                DB::table('presensis')
                    ->select([
                        DB::raw('count(*) as izin'),
                        DB::raw('DATE(created_at) as tanggal')
                    ])
                    ->groupBy('tanggal')
                    ->whereRaw('pegawai_id = ?', Auth::user()->id)
                    ->whereRaw('keterangan = ?', 'Izin')
                    ->whereRaw('DATE(created_at) <= ?', [date('Y-m-d', strtotime('-2 days'))])
                    ->orderBy('tanggal', 'ASC')
                    ->get()
                    ->count(),
                DB::table('presensis')
                    ->select([
                        DB::raw('count(*) as izin'),
                        DB::raw('DATE(created_at) as tanggal')
                    ])
                    ->groupBy('tanggal')
                    ->whereRaw('pegawai_id = ?', Auth::user()->id)
                    ->whereRaw('keterangan = ?', 'Izin')
                    ->whereRaw('DATE(created_at) < ?', [date('Y-m-d', strtotime('-1 days'))])
                    ->orderBy('tanggal', 'ASC')
                    ->get()
                    ->count(),
                DB::table('presensis')
                    ->select([
                        DB::raw('count(*) as izin'),
                        DB::raw('DATE(created_at) as tanggal')
                    ])
                    ->groupBy('tanggal')
                    ->whereRaw('pegawai_id = ?', Auth::user()->id)
                    ->whereRaw('keterangan = ?', 'Izin')
                    ->whereRaw('DATE(created_at) = ?', [date('Y-m-d')])
                    ->orderBy('tanggal', 'ASC')
                    ->get()
                    ->count(),
            ])
            ->addData('Alpa', [
                DB::table('presensis')
                    ->select([
                        DB::raw('count(*) as alpa'),
                        DB::raw('DATE(created_at) as tanggal')
                    ])
                    ->groupBy('tanggal')
                    ->whereRaw('pegawai_id = ?', Auth::user()->id)
                    ->whereRaw('keterangan = ?', 'Alpa')
                    ->whereRaw('DATE(created_at) <= ?', [date('Y-m-d', strtotime('-2 days'))])
                    ->orderBy('tanggal', 'ASC')
                    ->get()
                    ->count(),
                DB::table('presensis')
                    ->select([
                        DB::raw('count(*) as alpa'),
                        DB::raw('DATE(created_at) as tanggal')
                    ])
                    ->groupBy('tanggal')
                    ->whereRaw('pegawai_id = ?', Auth::user()->id)
                    ->whereRaw('keterangan = ?', 'Alpa')
                    ->whereRaw('DATE(created_at) < ?', [date('Y-m-d', strtotime('-1 days'))])
                    ->orderBy('tanggal', 'ASC')
                    ->get()
                    ->count(),
                DB::table('presensis')
                    ->select([
                        DB::raw('count(*) as alpa'),
                        DB::raw('DATE(created_at) as tanggal')
                    ])
                    ->groupBy('tanggal')
                    ->whereRaw('pegawai_id = ?', Auth::user()->id)
                    ->whereRaw('keterangan = ?', 'Alpa')
                    ->whereRaw('DATE(created_at) = ?', [date('Y-m-d')])
                    ->orderBy('tanggal', 'ASC')
                    ->get()
                    ->count(),
            ])
            // ->setFontColor('#fff')
            ->setColors(['#31c48d', '#f98080', '#ff8a4c', '#22d3ee'])
            ->setXAxis([
                date('d-m-Y', strtotime('-2 days')),
                date('d-m-Y', strtotime('-1 days')),
                date('d-m-Y'),
            ]);
    }
}
