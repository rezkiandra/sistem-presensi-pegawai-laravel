@extends('layouts.admin')
@section('title', 'Pegawai')

@section('content')
    <div class="relative overflow-x-auto sm:rounded-lg shadow-md md:shadow-md dark:border dark:border-gray-500 dark:rounded-lg dark:shadow-md dark:shadow-gray-500">
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
                    placeholder="Search for users">
            </div>
        </div>
        <table id="listPegawai" class="display w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        NIP
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Depan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Belakang
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Pangkat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Golongan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jenis Kelamin
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pegawais as $pegawai)
                    <tr
                        class="bg-white border-b dark:bg-gray-700 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="w-4 p-4 text-center">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4 capitalize">{{ $pegawai->nip }}</td>
                        <td class="px-6 py-4">{{ $pegawai->nama_depan }}</td>
                        <td class="px-6 py-4">{{ $pegawai->nama_belakang }}</td>
                        <td class="px-6 py-4">{{ $pegawai->pangkat }}</td>
                        <td class="px-6 py-4">{{ $pegawai->golongan }}</td>
                        <td class="px-6 py-4">{{ $pegawai->jenkel }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
