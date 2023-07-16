@extends('layouts.pegawai')
@section('title', 'Edit Biodata')

@section('content')
    <div class="shadow-md rounded-lg p-6">
        <form method="POST" action="{{ route('admin.update', $pegawai->id) }}" enctype="multipart/form-data">
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
                <div>
                    <label for="nama_depan" class="block mb-2 text-2sm font-medium text-gray-900 dark:text-white">Nama
                        Depan</label>
                    <input type="text" id="nama_depan" name="nama_depan"
                        value="{{ old('nama_depan', $pegawai->nama_depan) }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="nama_belakang" class="block mb-2 text-2sm font-medium text-gray-900 dark:text-white">Nama
                        Belakang</label>
                    <input type="text" id="nama_belakang" name="nama_belakang"
                        value="{{ old('nama_belakang', $pegawai->nama_belakang) }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="nip" class="block mb-2 text-2sm font-medium text-gray-900 dark:text-white">Nomor
                        Induk
                        Pegawai (NIP)</label>
                    <input type="text" id="nip" name="nip" value="{{ old('nip', $pegawai->nip) }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div>
                    <label for="pangkat"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pangkat</label>
                    <select id="pangkat" name="pangkat" id="pangkat"
                        class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected disabled>{{ $pegawai->pangkat }}</option>
                        <option value="Pembina">Pembina</option>
                        <option value="Penata">Penata</option>
                        <option value="Penata Muda Tk.I">Penata Muda Tk.I</option>
                        <option value="Penata Muda">Penata Muda</option>
                    </select>
                </div>
                <div>
                    <label for="golongan"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Golongan</label>
                    <select id="golongan" name="golongan" id="golongan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected disabled>{{ $pegawai->golongan }}</option>
                        <option value="IV-A">IV-A</option>
                        <option value="III-A">III-A</option>
                        <option value="III-B">III-B</option>
                        <option value="III-C">III-C</option>
                    </select>
                </div>
                <div>
                    <label for="jenkel" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis
                        Kelamin</label>
                    <select id="jenkel" name="jenkel" id="jenkel"
                        class="bg-gray-50 border border-gray-300 text-gray-900 mb-6 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected disabled>{{ $pegawai->jenkel }}</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div>
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="photo">Pas
                        Foto</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="photo_help" id="photo" type="file" name="photo">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="photo">SVG, PNG, JPG or GIF (MAX.
                        800x400px).</p>
                </div>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
        </form>
    </div>
@endsection
