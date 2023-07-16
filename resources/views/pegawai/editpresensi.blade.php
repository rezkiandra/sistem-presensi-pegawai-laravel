@extends('layouts.pegawai')
@section('title', 'Edit Presensi')

@section('content')
    <div class="shadow-md rounded-lg p-6">
        <form method="POST" action="{{ route('presensi.update', $presensi->id) }}">
            @csrf
            @method('PUT')
            @if ($errors->any())
                <div class="flex p-4 mb-4 text-2sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                    role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 mr-3 mt-[2px]" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Danger</span>
                    <div>
                        <span class="font-medium">Pastikan persyaratan dibawah terpenuhi</span>
                        <ul class="mt-1.5 ml-4 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            <div class="grid gap-5 mb-5 md:grid-cols-2">
                @if ($presensi->keterangan != 'Hadir')
                    <div>
                        <label for="tanggal_presensi"
                            class="block mb-2 text-2sm font-medium text-gray-900 dark:text-white">Tanggal
                            Presensi</label>
                        <input type="date" id="tanggal_presensi" name="tanggal_presensi" disabled
                            value="{{ old('tanggal_presensi', $presensi->tanggal_presensi) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hover:cursor-not-allowed">
                    </div>
                    <div>
                        <label for="jam_masuk" class="block mb-2 text-2sm font-medium text-gray-900 dark:text-white">Jam
                            Masuk</label>
                        <input type="time" id="jam_masuk" name="jam_masuk" disabled
                            value="{{ old('jam_masuk', $presensi->jam_masuk) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hover:cursor-not-allowed">
                    </div>
                    <div>
                        <label for="keterangan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                        <input type="text" id="keterangan" name="keterangan" disabled
                            value="{{ old('keterangan', $presensi->keterangan) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hover:cursor-not-allowed">
                    </div>
                    <div>
                        <label for="jam_keluar" class="block mb-2 text-2sm font-medium text-gray-900 dark:text-white">Jam
                            Keluar</label>
                        <input type="time" id="jam_keluar" name="jam_keluar" disabled
                            value="{{ old('jam_keluar', $presensi->jam_keluar) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hover:cursor-not-allowed">
                    </div>
                @else
                    <div>
                        <label for="tanggal_presensi"
                            class="block mb-2 text-2sm font-medium text-gray-900 dark:text-white">Tanggal
                            Presensi</label>
                        <input type="date" id="tanggal_presensi" name="tanggal_presensi" disabled
                            value="{{ old('tanggal_presensi', $presensi->tanggal_presensi) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hover:cursor-not-allowed">
                    </div>
                    <div>
                        <label for="jam_masuk" class="block mb-2 text-2sm font-medium text-gray-900 dark:text-white">Jam
                            Masuk</label>
                        <input type="time" id="jam_masuk" name="jam_masuk"
                            value="{{ old('jam_masuk', $presensi->jam_masuk) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hover:cursor-not-allowed">
                    </div>
                    <div>
                        <label for="keterangan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                        <input type="text" id="keterangan" name="keterangan" disabled
                            value="{{ old('keterangan', $presensi->keterangan) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 hover:cursor-not-allowed">
                    </div>
                    <div>
                        <label for="jam_keluar" class="block mb-2 text-2sm font-medium text-gray-900 dark:text-white">Jam
                            Keluar</label>
                        <input type="time" id="jam_keluar" name="jam_keluar"
                            value="{{ old('jam_keluar', $presensi->jam_keluar) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                @endif
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update
            </button>
        </form>
    </div>
@endsection
