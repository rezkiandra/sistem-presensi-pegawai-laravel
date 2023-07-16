@extends('layouts.dpegawai')
@section('title', 'Dashboard')

@section('content')
    <div class="flex items-center p-4 mb-5 text-sm text-green-800 border border-blue-300 rounded-lg bg-blue-200 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800 shadow-md"
        role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
            viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Info</span>
        <div class="text-base capitalize">
            <span class="font-medium">Hello {{ Auth::user()->name }},</span> Anda login sebagai role pegawai.
        </div>
    </div>
    <div class="bg-white text-gray-900 dark:text-gray-100 dark:bg-gray-300 rounded-lg shadow-md p-3">
        {!! $chart->container() !!}
    </div>
@endsection
