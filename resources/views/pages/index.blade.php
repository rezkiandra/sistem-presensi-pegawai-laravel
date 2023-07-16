@extends('layouts.guest')
@section('title', 'Home')

@section('content')
    <section
        class="bg-white dark:bg-gray-900 h-screen flex justify-center items-center bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div class="py-8 px-4 mx-auto container text-center lg:py-16">
            <a href="javascript:void(0)"
                class="inline-flex justify-between items-center py-1 px-1 pr-4 mb-7 text-sm text-blue-700 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-800">
                <span class="text-xs bg-blue-600 rounded-full text-white px-4 py-1.5 mr-3">Beta v1.0</span>
                <span class="text-sm md:text-2sm font-medium">Sistem ini masih dalam tahap pengujian dan pengembangan</span>
            </a>
            <h1
                class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Tepat Waktu Adalah Kunci Kedisiplinan
            </h1>
            <p class="mb-8 text-lg font-medium text-gray-500 lg:text-xl md:text-xl sm:px-16 lg:px-48 dark:text-gray-300">
                Sistem Presensi Pegawai dibuat untuk mempermudah pegawai dalam melakukan presensi seperti biasanya sehingga
                tingkat keamanannya meningkat juga. Sistem ini juga menjamin keamanan data pegawai dalam melakukan presensi
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <a href="{{ route('login') }}"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900 transition ease-in-out delay-150 duration-300 hover:-translate-y-1 hover:scale-110">
                    Mulai
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="javascript:void(0)" data-modal-target="readMore" data-modal-toggle="readMore"
                    data-modal-show="readMore"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:focus:ring-gray-800 transition ease-in-out delay-150 duration-300 hover:-translate-y-1 hover:scale-110">
                    Selengkapnya
                </a>
                <div id="readMore" tabindex="-1" aria-hidden="false"
                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Alur Penggunaan Sistem Presensi Pegawai
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-hide="readMore">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 uppercase font-medium">
                                    Register --> Login --> Melengkapi Biodata --> Presensi
                                </p>
                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 font-medium">
                                    1. Register Akun : User harus menginputkan name, email, dan password
                                </p>
                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 font-medium">
                                    2. Login Akun : User harus memasukkan email dan password saat register akun tadi
                                </p>
                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 font-medium">
                                    3. Melengkapi Biodata : User harus menginputkan nama depan, nama belakang, NIP,
                                    pangkat, golongan, dan jenis kelamin untuk melakukan presensi
                                </p>
                                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 font-medium">
                                    4. Presensi : User harus menginputkan tanggal presensi, jam masuk, keterangan, dan jam
                                    keluar sebagai bukti presensi
                                </p>
                            </div>
                            <!-- Modal footer -->
                            <div
                                class="flex items-center justify-end p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button data-modal-hide="readMore" type="button"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
