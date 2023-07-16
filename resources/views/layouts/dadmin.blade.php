<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="darkMode scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
</head>

<body>
    @include('components.sidebar')
    @include('components.darkmode')

    @include('sweetalert::alert')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}
</body>

</html>
