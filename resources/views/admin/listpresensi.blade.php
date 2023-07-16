@extends('layouts.admin')
@section('title', 'Presensi')

@section('content')
    <div
        class="relative overflow-x-auto sm:rounded-lg shadow-md md:shadow-md dark:border dark:border-gray-500 dark:rounded-lg dark:shadow-md dark:shadow-gray-500">
        <div class="flex items-center justify-between p-4 bg-white dark:bg-gray-800">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="table-search-users"
                    class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Cari Pegawai">
            </div>
        </div>
        <table id="listPresensi" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Lengkap
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tanggal Presensi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jam Checkin
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jam Checkout
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Keterangan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($presensi as $data)
                    @if ($data->keterangan == 'Hadir')
                        <tr
                            class="bg-green-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 font-medium">
                            <td class="w-4 p-4 text-center">{{ $loop->iteration }}</td>
                            <td class="w-4 p-4 text-center">{{ $data }}</td>
                            <td class="px-6 py-4">{{ date('d-m-Y', strtotime($data->tanggal_presensi)) }}</td>
                            <td class="px-6 py-4">{{ $data->jam_masuk }}</td>
                            <td class="px-6 py-4">{{ $data->jam_keluar }}</td>
                            <td class="px-6 py-4">{{ $data->keterangan }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('presensi.show', $data->id) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline uppercase">
                                    Detail
                                </a>
                            </td>
                        </tr>
                    @elseif ($data->keterangan == 'Sakit')
                        <tr
                            class="bg-red-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 font-medium">
                            <td class="w-4 p-4 text-center">{{ $loop->iteration }}</td>
                            <td class="w-4 p-4 text-center">{{ $data->pegawai }}</td>
                            <td class="px-6 py-4">{{ date('d-m-Y', strtotime($data->tanggal_presensi)) }}</td>
                            <td class="px-6 py-4">{{ $data->jam_masuk }}</td>
                            <td class="px-6 py-4">{{ $data->jam_keluar }}</td>
                            <td class="px-6 py-4">{{ $data->keterangan }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('presensi.show', $data->id) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline uppercase">
                                    Detail
                                </a>
                            </td>
                        </tr>
                    @elseif ($data->keterangan == 'Izin')
                        <tr
                            class="bg-orange-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 font-medium">
                            <td class="w-4 p-4 text-center">{{ $loop->iteration }}</td>
                            <td class="w-4 p-4 text-center">{{ $data->pegawai }}</td>
                            <td class="px-6 py-4">{{ date('d-m-Y', strtotime($data->tanggal_presensi)) }}</td>
                            <td class="px-6 py-4">{{ $data->jam_masuk }}</td>
                            <td class="px-6 py-4">{{ $data->jam_keluar }}</td>
                            <td class="px-6 py-4">{{ $data->keterangan }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('presensi.show', $data->id) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline uppercase">
                                    Detail
                                </a>
                            </td>
                        </tr>
                    @else
                        <tr
                            class="bg-purple-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 font-medium">
                            <td class="w-4 p-4 text-center">{{ $loop->iteration }}</td>
                            <td class="w-4 p-4 text-center">{{ $data->pegawai }}</td>
                            <td class="px-6 py-4">{{ date('d-m-Y', strtotime($data->tanggal_presensi)) }}</td>
                            <td class="px-6 py-4">{{ $data->jam_masuk }}</td>
                            <td class="px-6 py-4">{{ $data->jam_keluar }}</td>
                            <td class="px-6 py-4">{{ $data->keterangan }}</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('presensi.show', $data->id) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline uppercase">
                                    Detail
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
