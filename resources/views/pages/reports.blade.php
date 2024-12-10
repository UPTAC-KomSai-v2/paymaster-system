<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Generate Reports</title>

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
    <body class="font-sans antialiased h-screen w-screen flex justify-center">
        <div class="w-[50%] py-10 box-border">
            <header class="flex items-center gap-2">
                <div><a href="/"><img src="{{ asset('images/logo.png') }}" width="80"></a></div>
                <div>
                    <h3 class="text-lg">Paymaster</h3>
                    <h1 class="text-4xl font-black -mt-1">Generate Reports</h1>
                </div>
            </header>

            <hr class="my-4">

            <!-- Payroll -->
            <div class="card mb-2">
                <div class="flex items-center px-3 py-2">
                    <div class="flex-none">
                        <i class="bi bi-file-earmark-arrow-down text-lg"></i>
                    </div>
                    <div class="flex-auto pl-4">
                        <h5 class="font-bold text-xl">Payroll</h5>
                    </div>
                    <div class="flex-none">
                        <a href="/reports/payroll"><button class="btn btn-light hover:bg-gray-50">
                            <i class="bi bi-download"></i> Download
                        </button></a>
                    </div>
                </div>
            </div>
            
            <!-- Payslip -->
            <div class="card mb-2">
                <div class="flex items-center px-3 py-2">
                    <div class="flex-none">
                        <i class="bi bi-file-earmark-arrow-down text-lg"></i>
                    </div>
                    <div class="flex-auto pl-4">
                        <h5 class="font-bold text-xl">Payslip</h5>
                    </div>
                    <div class="flex-none">
                        <a href="/reports/payroll"><button class="btn btn-light hover:bg-gray-50">
                            <i class="bi bi-download"></i> Download
                        </button></a>
                    </div>
                </div>
            </div>
            
            <!-- Abstract -->
            <div class="card mb-2">
                <div class="flex items-center px-3 py-2">
                    <div class="flex-none">
                        <i class="bi bi-file-earmark-arrow-down text-lg"></i>
                    </div>
                    <div class="flex-auto pl-4">
                        <h5 class="font-bold text-xl">Abstract</h5>
                    </div>
                    <div class="flex-none">
                        <a href="/reports/payroll"><button class="btn btn-light hover:bg-gray-50">
                            <i class="bi bi-download"></i> Download
                        </button></a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
