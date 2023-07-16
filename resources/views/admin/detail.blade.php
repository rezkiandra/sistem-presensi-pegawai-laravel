@extends('layouts.admin')
@section('title', 'Detail Pegawai')

@section('content')
    <div class="flex gap-5">
        <div
            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-700 dark:border-gray-500">
            <div class="flex flex-col items-center py-10">
                <svg class="w-[72px] h-[72px] text-gray-600 mb-5 dark:text-gray-300" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M10 19a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 11 14H9a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 10 19Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                <h5 class="mb-1 text-xl font-medium text-gray-800 dark:text-gray-300">
                    {{ $presensi->pegawai->nama_depan . ' ' . $presensi->pegawai->nama_belakang }}</h5>
                <span class="text-2sm text-gray-600 font-medium dark:text-gray-300">{{ $presensi->pegawai->nip }}</span>
                <span class="text-2sm text-gray-600 font-medium dark:text-gray-300">{{ $presensi->pegawai->jenkel }}</span>
                <div class="flex flex-col justify-between items-center">
                    <div class="text-2sm text-gray-600 dark:text-gray-300 font-medium">{{ $presensi->pegawai->pangkat }}
                    </div>
                    <div class="text-2sm text-gray-600 dark:text-gray-300 font-medium">{{ $presensi->pegawai->golongan }}
                    </div>
                </div>
            </div>
        </div>
        <div
            class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-700 dark:border-gray-500">
            <div class="flex flex-col items-center py-10">
                @if ($presensi->keterangan == 'Hadir')
                    <svg class="w-[72px] h-[72px] text-gray-600 mb-5 dark:text-gray-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M5 5h8m-1-3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1m6 0v3H6V2m6 0h4a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h4m0 9.464 2.025 1.965L12 9.571" />
                    </svg>
                @elseif ($presensi->keterangan == 'Sakit')
                    <svg class="w-[72px] h-[72px] text-gray-600 mb-5 dark:text-gray-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                @elseif ($presensi->keterangan == 'Izin')
                    <svg class="w-[72px] h-[72px] text-gray-600 mb-5 dark:text-gray-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M16 5h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-2v3l-4-3H8m4-13H2a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h2v3l4-3h4a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
                    </svg>
                @else
                    <svg class="w-[72px] h-[72px] text-gray-600 mb-5 dark:text-gray-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                            d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                @endif
                <h5 class="mb-5 text-xl font-medium text-gray-800 dark:text-gray-300">
                    {{ $presensi->keterangan }}</h5>
                <span
                    class="text-2sm text-gray-600 font-medium dark:text-gray-300">{{ date('d-m-Y', strtotime($presensi->tanggal_presensi)) }}</span>
                <span class="text-2sm text-gray-600 font-medium dark:text-gray-300">{{ $presensi->jam_masuk }}</span>
                <span class="text-2sm text-gray-600 font-medium dark:text-gray-300">{{ $presensi->jam_keluar }}</span>
                <div class="flex flex-col justify-between items-center">
                    <div class="text-2sm text-gray-600 dark:text-gray-300 font-medium">{{ $presensi->pangkat }}
                    </div>
                    <div class="text-2sm text-gray-600 dark:text-gray-300 font-medium">{{ $presensi->golongan }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
