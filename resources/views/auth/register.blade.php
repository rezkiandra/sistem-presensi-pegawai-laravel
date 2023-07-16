@extends('layouts.guest')
@section('title', 'Register Akun')

@section('content')
    <div
        class="bg-white dark:bg-gray-900 h-screen flex justify-center items-center bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern.svg')] dark:bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/hero-pattern-dark.svg')]">
        <div
            class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-xl sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
            @if ($errors->any())
                <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
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
            <form class="space-y-6" action="" method="POST">
                @csrf
                <h5 class="text-xl font-medium text-gray-900 dark:text-white">Register Untuk Pakai Sistem</h5>
                <div>
                    <label for="name" class="block mb-2 text-2sm font-medium text-gray-900 dark:text-white">
                        Name</label>
                    <input type="name" name="name" id="name" value="{{ old('name') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="Lorem">
                </div>
                <div>
                    <label for="email" class="block mb-2 text-2sm font-medium text-gray-900 dark:text-white">
                        Email Address</label>
                    <input type="email" name="email" id="email" value="{{ old('email') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        placeholder="loremipsum@gmail.com">
                </div>
                <div>
                    <label for="password" class="block mb-2 text-2sm font-medium text-gray-900 dark:text-white">
                        Password</label>
                    <input type="password" name="password" id="password" placeholder="********" value="{{ old('password') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-2sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                </div>
                <button type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-2sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Register
                </button>
                <div class="text-2sm font-medium text-gray-500 dark:text-gray-300">
                    Belum punya akun? <a href="{{ url('register') }}"
                        class="text-blue-700 hover:underline dark:text-blue-500">
                        Login sekarang</a>
                </div>
            </form>
        </div>
    </div>
@endsection
