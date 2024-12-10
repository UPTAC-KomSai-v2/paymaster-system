<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        <script src="{{ asset('ext/jquery-3.7.1.min.js') }}"></script>
        <link rel="stylesheet" href="{{ asset('ext/bootstrap-4.0.0.min.css') }}">
        <link rel="stylesheet" href="{{ asset('ext/bootstrap-icons-1.11.3.min.css') }}">
        <script src="{{ asset('ext/bootstrap-4.0.0.bundle.min.js') }}"></script>

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body class="font-sans antialiased h-screen w-screen flex justify-center text-center items-center bg-cover bg-center" style="background-image: url('{{ asset('images/background.png') }}');">
        <div class="w-[50%] py-10 box-border text-center">
            <div class="flex justify-center"><img src="{{ asset('images/logo-lg.png') }}" width="270"></div><br/>
            <h1 class="text-6xl font-black mb-20">Paymaster</h1>

            <span class="text-lg">Welcome to <b>Paymaster!</b> To get started, choose on any of the following links below: </span>
            <br/> <br/>
            <a href="/employees/"><button class="btn btn-primary"><i class="bi bi-people-fill"></i> View Employees</button></a>
            <a href="/employees/create"><button class="btn btn-secondary"><i class="bi bi-plus"></i> Add Employee</button></a>
            <a href="/reports"><button class="btn btn-info"><i class="bi bi-people-fill"></i> Generate Reports</button></a>
        </div>
    </body>
</html>
