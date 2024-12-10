<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Employees</title>

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
                <div><img src="{{ asset('images/logo.png') }}" width="80"></div>
                <div>
                    <h3 class="text-lg">Paymaster</h3>
                    <h1 class="text-4xl font-black -mt-1">Employees</h1>
                </div>
            </header>

            <!-- Search bar -->
            <div class="flex items-center gap-2 w-full my-2">
                <div class="relative flex-auto">
                    <input type="text" class="form-control pl-10 pr-4 py-2 w-full border border-gray-300 rounded-full" placeholder="Search...">
                    <div class="absolute top-1/2 left-3 transform -translate-y-1/2">
                        <i class="bi bi-search"></i>
                    </div>
                </div>
                <div>
                    <a href="/employees/create"><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal" onclick="$('#exampleModal').modal('show')">
                        <i class="bi bi-plus"></i> ADD EMPLOYEE
                    </button></a>
                    <a href="/reports"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal" onclick="$('#exampleModal').modal('show')">
                        <i class="bi bi-file-earmark-arrow-down"></i> REPORTS
                    </button></a>
                </div>
            </div>

            <!-- Employee Item Card -->
            @foreach ($employees as $employee)
            <div class="card mb-2">
                <div class="flex items-center px-3 py-2">
                    <!-- Employee Avatar -->
                    <div class="flex-none">
                        <div class="h-12 w-12 rounded-full overflow-hidden bg-blue-500">
                            <img src="{{ asset('images/avatar.jpg') }}" class="h-full w-full object-cover">
                        </div>
                    </div>
                    
                    <!-- Employee Details -->
                    <div class="flex-auto">
                        <div class="card-body py-0">
                            <h5 class="font-bold text-xl">{{$employee['firstName']}} {{$employee['lastName']}}</h5>
                            <p class="text-sm">{{$employee['division']}}</p>
                        </div>
                    </div>

                    <!-- Card Actions -->
                    <div class="flex-none">
                        <a href="/employees/view?e={{$employee['id']}}&m=2&y=2025"><button class="btn rounded-circle w-12 h-12 hover:bg-gray-50">
                            <i class="bi bi-eye"></i>
                        </button></a>
                        <a href="/employees/edit?e={{$employee['id']}}"><button class="btn rounded-circle w-12 h-12 hover:bg-gray-50">
                            <i class="bi bi-pencil"></i>
                        </button></a>
                        <button class="btn rounded-circle w-12 h-12 hover:bg-gray-50">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </body>
</html>
