@extends('layouts.dadmin')
@section('title', 'Dashboard')

@section('content')
    <div class="flex items-center p-4 mb-4 text-sm text-purple-800 border shadow-md shadow-purple-300 border-purple-400 rounded-lg bg-purple-200 dark:bg-gray-700"
        role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 mr-3 text-purple-800 dark:text-purple-400" aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Info</span>
        <div class="text-base capitalize text-purple-800 dark:text-purple-400">
            <span class="font-medium">Hello {{ Auth::user()->name }},</span> Anda login sebagai role admin.
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-4 font-medium uppercase">
        <div
            class="flex items-center justify-between h-24 gap-10 rounded-lg shadow-md shadow-green-300 border border-green-400 bg-green-300 dark:bg-gray-700 px-10">
            <svg class="w-[48px] h-[64px] text-green-900 dark:text-green-400" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 22 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M20 10a28.076 28.076 0 0 1-1.091 9M6.231 2.37a8.994 8.994 0 0 1 12.88 3.73M1.958 13S2 12.577 2 10a8.949 8.949 0 0 1 1.735-5.307m12.84 3.088c.281.706.426 1.46.425 2.22a30 30 0 0 1-.464 6.231M5 10a6 6 0 0 1 9.352-4.974M3 19a5.964 5.964 0 0 1 1.01-3.328 5.15 5.15 0 0 0 .786-1.926m8.66 2.486a13.96 13.96 0 0 1-.962 2.683M6.5 17.336C8 15.092 8 12.846 8 10a3 3 0 1 1 6 0c0 .75 0 1.521-.031 2.311M11 10.001c0 3 0 6-2 9" />
            </svg>
            <div class="flex flex-col justify-center items-center">
                @foreach ($hadir as $data)
                    @if ($loop->last)
                        <p class="text-xl lg:text-2xl text-green-900 dark:text-green-400 mb-1">{{ $data->hadir }}</p>
                        <p class="text-md lg:text-lg text-green-900 dark:text-green-400 text-center">Hadir Hari Ini</p>
                    @endif
                @endforeach
            </div>
        </div>
        <div
            class="flex items-center justify-between h-24 gap-10 rounded-lg shadow-md shadow-red-300 border border-red-400 bg-red-300 dark:bg-gray-700 px-10">
            <svg class="w-[48px] h-[48px] text-red-800 dark:text-red-400" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <div class="flex flex-col justify-center items-center">
                @foreach ($sakit as $data)
                    @if ($loop->last)
                        <p class="text-xl lg:text-2xl text-red-800 dark:text-red-400 mb-3">{{ $data->sakit }}</p>
                        <p class="text-md lg:text-lg text-red-800 dark:text-red-400 text-center">Sakit Hari Ini</p>
                    @endif
                @endforeach
            </div>
        </div>
        <div
            class="flex items-center justify-between h-24 gap-10 rounded-lg shadow-md shadow-orange-300 border border-orange-400 bg-orange-300 dark:bg-gray-700 px-10">
            <svg class="w-[48px] h-[48px] text-orange-800 dark:text-orange-400" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M16 5h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-2v3l-4-3H8m4-13H2a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h2v3l4-3h4a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z" />
            </svg>
            <div class="flex flex-col justify-center items-center">
                @foreach ($izin as $data)
                    @if ($loop->last)
                        <p class="text-xl lg:text-2xl text-orange-800 dark:text-orange-400 mb-3">{{ $data->izin }}</p>
                        <p class="text-md lg:text-lg text-orange-800 dark:text-orange-400 text-center">Izin Hari Ini</p>
                    @endif
                @endforeach
            </div>
        </div>
        <div
            class="flex items-center justify-between h-24 gap-10 rounded-lg shadow-md shadow-cyan-300 border border-cyan-400 bg-cyan-300 dark:bg-gray-700 px-10">
            <svg class="w-[48px] h-[48px] text-cyan-800 dark:text-cyan-400" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M7.529 7.988a2.502 2.502 0 0 1 5 .191A2.441 2.441 0 0 1 10 10.582V12m-.01 3.008H10M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
            <div class="flex flex-col justify-center items-center">
                @foreach ($alpa as $data)
                    @if ($loop->last)
                        <p class="text-xl lg:text-2xl text-cyan-800 dark:text-cyan-400 mb-3">{{ $data->alpa }}</p>
                        <p class="text-md lg:text-lg text-cyan-800 dark:text-cyan-400 text-center">Alpa Hari Ini</p>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 gap-4 mb-4 md:grid-cols-2 font-medium uppercase">
        <div
            class="flex items-center justify-between h-24 gap-10 rounded-lg shadow-md shadow-lime-300 border border-lime-400 bg-lime-300 dark:bg-gray-700 px-10">
            <svg class="w-[48px] h-[48px] text-lime-800 dark:text-lime-400" aria-hidden="true" fill="none"
                viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M4.333 6.764a3 3 0 1 1 3.141-5.023M2.5 16H1v-2a4 4 0 0 1 4-4m7.379-8.121a3 3 0 1 1 2.976 5M15 10a4 4 0 0 1 4 4v2h-1.761M13 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-4 6h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
            </svg>
            <div class="flex flex-col justify-center items-center">
                <p class="text-xl lg:text-2xl text-lime-800 dark:text-lime-400 mb-3">{{ $pegawais }}</p>
                <p class="text-md lg:text-lg text-lime-800 dark:text-lime-400 text-center">Jumlah Pegawai</p>
            </div>
        </div>
        <div
            class="flex items-center justify-between h-24 gap-10 rounded-lg shadow-md shadow-yellow-300 border border-yellow-400 bg-yellow-300 dark:bg-gray-700 px-10">
            <svg class="w-[48px] h-[48px] text-yellow-800 dark:text-yellow-400" aria-hidden="true" fill="none" fill="none"
                viewBox="0 0 14 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                    d="M7 8a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-2 3h4a4 4 0 0 1 4 4v2H1v-2a4 4 0 0 1 4-4Z" />
            </svg>
            <div class="flex flex-col justify-center items-center">
                <p class="text-xl lg:text-2xl text-yellow-800 dark:text-yellow-400 mb-3">{{ $users }}</p>
                <p class="text-md lg:text-lg text-yellow-800 dark:text-yellow-400 text-center">Jumlah User</p>
            </div>
        </div>
    </div>
    <div class="rounded-lg shadow-md bg-white dark:bg-gray-300">
        {!! $chart->container() !!}
    </div>
@endsection
