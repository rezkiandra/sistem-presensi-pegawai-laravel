<?php

namespace App\Charts;

use App\Models\Pegawai;
use App\Models\Presensi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class AdminChart
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
            ->setSubtitle('Keterangan = Hadir, Sakit, Izin, Alpa')
            ->addData('Hadir', [
                Presensi::all()
                    ->where('keterangan', '=', 'Hadir')
                    ->where('created_at', '<=', date('d-m-Y', strtotime('-2 days')))
                    ->count(),

                Presensi::all()
                    ->where('keterangan', '=', 'Hadir')
                    ->where('created_at', '<=', date('d-m-Y', strtotime('-1 days')))
                    ->count(),

                Presensi::all()
                    ->where('keterangan', '=', 'Hadir')
                    ->count(),
            ])
            ->addData('Sakit', [
                Presensi::all()
                    ->where('keterangan', '=', 'Sakit')
                    ->where('created_at', '<=', date('d-m-Y', strtotime('-2 days')))
                    ->count(),

                Presensi::all()
                    ->where('keterangan', '=', 'Sakit')
                    ->where('created_at', '<=', date('d-m-Y', strtotime('-1 days')))
                    ->count(),

                Presensi::all()
                    ->where('keterangan', '=', 'Sakit')
                    ->count(),
            ])
            ->addData('Izin', [
                Presensi::all()
                    ->where('keterangan', '=', 'Izin')
                    ->where('created_at', '<=', date('d-m-Y', strtotime('-2 days')))
                    ->count(),

                Presensi::all()
                    ->where('keterangan', '=', 'Izin')
                    ->where('created_at', '<=', date('d-m-Y', strtotime('-1 days')))
                    ->count(),

                Presensi::all()
                    ->where('keterangan', '=', 'Izin')
                    ->count(),
            ])
            ->addData('Alpa', [
                Presensi::all()
                    ->where('keterangan', '=', 'Alpa')
                    ->where('created_at', '<=', date('d-m-Y', strtotime('-2 days')))
                    ->count(),

                Presensi::all()
                    ->where('keterangan', '=', 'Alpa')
                    ->where('created_at', '<=', date('d-m-Y', strtotime('-1 days')))
                    ->count(),

                Presensi::all()
                    ->where('keterangan', '=', 'Alpa')
                    ->count(),
            ])
            ->setColors(['#31c48d', '#f98080', '#ff8a4c', '#22d3ee'])
            ->setXAxis([
                date('d-m-Y', strtotime('-2 days')),
                date('d-m-Y', strtotime('-1 days')),
                date('d-m-Y')
                // Schema::getColumnListing('pegawais')
            ]);
    }
}
