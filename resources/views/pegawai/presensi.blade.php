@extends('layouts.pegawai')
@section('title', 'Presensi')

@section('content')
    <div class="shadow-md rounded-lg p-6">
        <form method="POST" action="">
            @csrf
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
                @foreach ($pegawai as $data)
                    <div>
                        <label for="tanggal_presensi"
                            class="block mb-2 text-2sm font-medium text-gray-900 dark:text-white">Tanggal
                            Presensi</label>
                        <input type="date" id="tanggal_presensi" name="tanggal_presensi"
                            value="{{ old('tanggal_presensi', $data->tanggal_presensi) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div>
                        <label for="jam_masuk" class="block mb-2 text-2sm font-medium text-gray-900 dark:text-white">Jam
                            Masuk</label>
                        <input type="time" id="jam_masuk" name="jam_masuk" value="{{ old('jam_masuk') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div>
                        <label for="keterangan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                        <select id="keterangan" name="keterangan" id="keterangan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected disabled>Pilih Keterangan</option>
                            <option value="Hadir">Hadir</option>
                            <option value="Sakit">Sakit</option>
                            <option value="Izin">Izin</option>
                            <option value="Alpa">Alpa</option>
                        </select>
                    </div>
                    <div>
                        <label for="jam_keluar" class="block mb-2 text-2sm font-medium text-gray-900 dark:text-white">Jam
                            Keluar</label>
                        <input type="time" id="jam_keluar" name="jam_keluar" value="{{ old('jam_keluar') }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                @endforeach
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
        </form>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-5">
        <div class="flex items-center justify-between p-6 bg-white dark:bg-gray-900">
            @foreach ($pegawai as $data)
                <h3 class="text-lg capitalize font-medium text-gray-900">LIST PRESENSI :
                    {{ $data->nama_depan . ' ' . $data->nama_belakang }}</h3>
            @endforeach
        </div>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Presensi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jam Masuk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jam Keluar
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Keterangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($presensi as $data)
                    @if ($data->keterangan == 'Hadir')
                        <tr
                            class="bg-green-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 font-medium">
                            <td class="w-4 p-4 text-center">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4">{{ date('d-m-Y', strtotime($data->tanggal_presensi)) }}</td>
                            <td class="px-6 py-4">{{ $data->jam_masuk }}</td>
                            <td class="px-6 py-4">{{ $data->jam_keluar }}</td>
                            <td class="px-6 py-4">{{ $data->keterangan }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('presensi.edit', $data->id) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline uppercase">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @elseif ($data->keterangan == 'Sakit')
                        <tr
                            class="bg-red-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 font-medium">
                            <td class="w-4 p-4 text-center">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4">{{ date('d-m-Y', strtotime($data->tanggal_presensi)) }}</td>
                            <td class="px-6 py-4">{{ $data->jam_masuk }}</td>
                            <td class="px-6 py-4">{{ $data->jam_keluar }}</td>
                            <td class="px-6 py-4">{{ $data->keterangan }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('presensi.edit', $data->id) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline uppercase">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @elseif ($data->keterangan == 'Izin')
                        <tr
                            class="bg-orange-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 font-medium">
                            <td class="w-4 p-4 text-center">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4">{{ date('d-m-Y', strtotime($data->tanggal_presensi)) }}</td>
                            <td class="px-6 py-4">{{ $data->jam_masuk }}</td>
                            <td class="px-6 py-4">{{ $data->jam_keluar }}</td>
                            <td class="px-6 py-4">{{ $data->keterangan }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('presensi.edit', $data->id) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline uppercase">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @else
                        <tr
                            class="bg-purple-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 font-medium">
                            <td class="w-4 p-4 text-center">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4">{{ date('d-m-Y', strtotime($data->tanggal_presensi)) }}</td>
                            <td class="px-6 py-4">{{ $data->jam_masuk }}</td>
                            <td class="px-6 py-4">{{ $data->jam_keluar }}</td>
                            <td class="px-6 py-4">{{ $data->keterangan }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('presensi.edit', $data->id) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline uppercase">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
