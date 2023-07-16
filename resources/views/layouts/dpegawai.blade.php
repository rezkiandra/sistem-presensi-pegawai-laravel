<!doctype html>
<html lang="en" class="scroll-smooth darkMode">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pegawai - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('components.sidebar2')
    @include('components.darkmode')

    @include('sweetalert::alert')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.7.0/flowbite.min.js"></script>
    <script src="{{ $chart->cdn() }}"></script>
    {{ $chart->script() }}
</body>

</html>
