@extends('layouts.guest')
@section('title', 'About')

@section('content')
    <div
        class="bg-white dark:bg-gray-900 h-screen flex justify-center items-center bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">

        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16">
                <div
                    class="bg-white shadow-md transition ease-in-out delay-100 duration-300 hover:-translate-y-2 hover:scale-100 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12 mb-8">
                    <a href="#"
                        class="bg-blue-100 text-blue-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-blue-400 mb-2">
                        <svg class="w-[12px] h-[12px] mr-1.5 text-blue-800 dark:text-blue-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                        </svg>
                        Technology
                    </a>
                    <h1 class="text-gray-900 dark:text-white text-2xl md:text-5xl font-extrabold mb-2">Mengapa Sistem
                        Ini Dikembangkan ?</h1>
                    <p class="text-lg font-normal text-gray-500 dark:text-gray-300 mb-6">Sistem Presensi dikembangkan guna
                        memenuhi sekaligus memudahkan pegawai SMP 3 Sebawi dalam melakukan presensi yang mana kegiatan itu
                        masih dilakukan secara manual, sehingga tingkat kecurangan, keamanan, keakuratan masih belum
                        terjamin. Oleh karena itu kami mengembangkan sistem presensi pegawai ini. Sebagai bentuk tugas
                        project UAS Mata Kuliah Analisis Perancangan Sistem Informasi</p>
                    <a href="#"
                        class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Read more
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
                <div class="grid md:grid-cols-3 gap-8">
                    <div
                        class="bg-white shadow-md transition ease-in-out delay-100 duration-300 hover:-translate-y-2 hover:scale-100 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                        <a href="#"
                            class="bg-green-100 text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 mb-2">
                            <svg class="w-[12px] h-[12px] mr-1.5 text-green-800 dark:text-green-400" aria-hidden="true"
                                fill="currentColor" viewBox="0 0 18 18">
                                <path
                                    d="M17 11h-2.722L8 17.278a5.512 5.512 0 0 1-.9.722H17a1 1 0 0 0 1-1v-5a1 1 0 0 0-1-1ZM6 0H1a1 1 0 0 0-1 1v13.5a3.5 3.5 0 1 0 7 0V1a1 1 0 0 0-1-1ZM3.5 15.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2ZM16.132 4.9 12.6 1.368a1 1 0 0 0-1.414 0L9 3.55v9.9l7.132-7.132a1 1 0 0 0 0-1.418Z" />
                            </svg>
                            System
                        </a>
                        <h2 class="text-gray-900 dark:text-white text-2xl font-extrabold mb-2">Terintegrasi</h2>
                        <p class="text-lg font-normal text-gray-500 dark:text-gray-300 mb-4">Integrasi antar sistem yang
                            baik akan memudahkan bagi para user dalam melakukan kegiatan presensi. Dalam hal ini sistem kami
                            terintegrasi dengan aplikasi WhatsApp</p>
                        <a href="#"
                            class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Read
                            more
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                    <div
                        class="bg-white shadow-md transition ease-in-out delay-100 duration-300 hover:-translate-y-2 hover:scale-100 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                        <a href="#"
                            class="bg-purple-100 text-purple-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-purple-400 mb-2">
                            <svg class="w-[12px] h-[12px] mr-1.5 text-purple-800 dark:text-purple-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9 19V.352A3.451 3.451 0 0 0 7.5 0a3.5 3.5 0 0 0-3.261 2.238A3.5 3.5 0 0 0 2.04 6.015a3.518 3.518 0 0 0-.766 1.128c-.042.1-.064.209-.1.313a3.34 3.34 0 0 0-.106.344 3.463 3.463 0 0 0 .02 1.468A4.016 4.016 0 0 0 .3 10.5l-.015.036a3.861 3.861 0 0 0-.216.779A3.968 3.968 0 0 0 0 12a4.032 4.032 0 0 0 .107.889 4 4 0 0 0 .2.659c.006.014.015.027.021.041a3.85 3.85 0 0 0 .417.727c.105.146.219.284.342.415.072.076.148.146.225.216.1.091.205.179.315.26.11.081.2.14.308.2.02.013.039.028.059.04v.053a3.506 3.506 0 0 0 3.03 3.469 3.426 3.426 0 0 0 4.154.577A.972.972 0 0 1 9 19Zm10.934-7.68a3.956 3.956 0 0 0-.215-.779l-.017-.038a4.016 4.016 0 0 0-.79-1.235 3.417 3.417 0 0 0 .017-1.468 3.387 3.387 0 0 0-.1-.333c-.034-.108-.057-.22-.1-.324a3.517 3.517 0 0 0-.766-1.128 3.5 3.5 0 0 0-2.202-3.777A3.5 3.5 0 0 0 12.5 0a3.451 3.451 0 0 0-1.5.352V19a.972.972 0 0 1-.184.546 3.426 3.426 0 0 0 4.154-.577A3.506 3.506 0 0 0 18 15.5v-.049c.02-.012.039-.027.059-.04.106-.064.208-.13.308-.2s.214-.169.315-.26c.077-.07.153-.14.225-.216a4.007 4.007 0 0 0 .459-.588c.115-.176.215-.361.3-.554.006-.014.015-.027.021-.041.087-.213.156-.434.205-.659.013-.057.024-.115.035-.173.046-.237.07-.478.073-.72a3.948 3.948 0 0 0-.066-.68Z" />
                            </svg>
                            Service
                        </a>
                        <h2 class="text-gray-900 dark:text-white text-2xl font-extrabold mb-2">Efektif & Efisien</h2>
                        <p class="text-lg font-normal text-gray-500 dark:text-gray-300 mb-4">Langkah pengerjaan yang panjang
                            akan menjadi singkat karena sistem kami tetap menjaga efektivitas dan efisiensi dalam melakukan
                            presensi sehingga tidak bertele-tele
                        </p>
                        <a href="#"
                            class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Read
                            more
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                    <div
                        class="bg-white shadow-md transition ease-in-out delay-100 duration-300 hover:-translate-y-2 hover:scale-100 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
                        <a href="#"
                            class="bg-lime-100 text-lime-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-lime-400 mb-2">
                            <svg class="w-[12px] h-[12px] mr-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 4 1 8l4 4m10-8 4 4-4 4M11 1 9 15" />
                            </svg>
                            Security
                        </a>
                        <h2 class="text-gray-900 dark:text-white text-2xl font-extrabold mb-2">Keamanan Data</h2>
                        <p class="text-lg font-normal text-gray-500 dark:text-gray-300 mb-4">Data yang disimpan dalam
                            database sistem ini kami jamin 100% aman. Selain aman, karena data yang digunakan tidak terlalu
                            mengarah ke data pribadi individu.</p>
                        <a href="#"
                            class="text-blue-600 dark:text-blue-500 hover:underline font-medium text-lg inline-flex items-center">Read
                            more
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
