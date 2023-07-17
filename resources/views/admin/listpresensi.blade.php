@extends('layouts.admin')
@section('title', 'Presensi')

@section('content')
    <div
        class="relative overflow-x-auto sm:rounded-lg shadow-md md:shadow-md dark:border dark:border-gray-500 dark:rounded-lg dark:shadow-md dark:shadow-gray-500">
        <div class="flex items-center justify-between p-4 bg-white dark:bg-gray-800">
            <div>
                <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                    class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                    type="button">
                    <span class="sr-only">Action button</span>
                    Action
                    <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="dropdownAction"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                        <li>
                            <a href="{{ route('admin.laporan_presensi') }}"
                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cetak
                                Laporan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <table id="listPresensi" class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Detail Data
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
                    {{-- <th scope="col" class="px-6 py-3">
                        Action
                    </th> --}}
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
                            {{-- <td class="px-6 py-4">
                                <a href="{{ route('presensi.destroy', $data->id) }}"
                                    onclick="return confirm('Apakah anda yakin ingin hapus data?')"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline uppercase">
                                    Hapus
                                </a>
                            </td> --}}
                        </tr>
                    @elseif ($data->keterangan == 'Sakit')
                        <tr
                            class="bg-red-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 font-medium">
                            <td class="w-4 p-4 text-center">{{ $loop->iteration }}</td>
                            <td class="w-4 p-4 text-center">{{ $data }}</td>
                            <td class="px-6 py-4">{{ date('d-m-Y', strtotime($data->tanggal_presensi)) }}</td>
                            <td class="px-6 py-4">{{ $data->jam_masuk }}</td>
                            <td class="px-6 py-4">{{ $data->jam_keluar }}</td>
                            <td class="px-6 py-4">{{ $data->keterangan }}</td>
                            {{-- <td class="px-6 py-4">
                                <a href="{{ route('presensi.destroy', $data->id) }}"
                                    onclick="return confirm('Apakah anda yakin ingin hapus data?')"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline uppercase">
                                    Hapus
                                </a>
                            </td> --}}
                        </tr>
                    @elseif ($data->keterangan == 'Izin')
                        <tr
                            class="bg-orange-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 font-medium">
                            <td class="w-4 p-4 text-center">{{ $loop->iteration }}</td>
                            <td class="w-4 p-4 text-center">{{ $data }}</td>
                            <td class="px-6 py-4">{{ date('d-m-Y', strtotime($data->tanggal_presensi)) }}</td>
                            <td class="px-6 py-4">{{ $data->jam_masuk }}</td>
                            <td class="px-6 py-4">{{ $data->jam_keluar }}</td>
                            <td class="px-6 py-4">{{ $data->keterangan }}</td>
                            {{-- <td class="px-6 py-4">
                                <a href="{{ route('presensi.destroy', $data->id) }}"
                                    onclick="return confirm('Apakah anda yakin ingin hapus data?')"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline uppercase">
                                    Hapus
                                </a>
                            </td> --}}
                        </tr>
                    @else
                        <tr
                            class="bg-purple-100 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 font-medium">
                            <td class="w-4 p-4 text-center">{{ $loop->iteration }}</td>
                            <td class="w-4 p-4 text-center">{{ $data }}</td>
                            <td class="px-6 py-4">{{ date('d-m-Y', strtotime($data->tanggal_presensi)) }}</td>
                            <td class="px-6 py-4">{{ $data->jam_masuk }}</td>
                            <td class="px-6 py-4">{{ $data->jam_keluar }}</td>
                            <td class="px-6 py-4">{{ $data->keterangan }}</td>
                            {{-- <td class="px-6 py-4">
                                <a href="{{ route('presensi.destroy', $data->id) }}"
                                    onclick="return confirm('Apakah anda yakin ingin hapus data?')"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline uppercase">
                                    Hapus
                                </a>
                            </td> --}}
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
