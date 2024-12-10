<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Employee Info</title>

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
                    <h1 class="text-4xl font-black -mt-1">Employee Info</h1>
                </div>
            </header>

            <hr class="my-4">

            <!-- Basic Employee Details -->
            <div class="flex gap-4">
                <div class="flex-none">
                    <div class="h-24 w-24 rounded-full overflow-hidden bg-blue-500">
                        <img src="{{ asset('images/avatar.jpg') }}" class="h-full w-full object-cover">
                    </div>
                </div>
                <div class="flex-auto">
                    <h5 class="text-sm">Employee ID: <b>{{$employee['employeeId']}}</b></h5>
                    <h5 class="font-bold text-2xl mb-2">{{$employee['firstName']}} {{$employee['lastName']}}</h5>
                    <h5 class="font-bold">Instructor 1 (Salary Grade <b>{{$employee['salaryGrade']}}</b>)</h5>
                    <h5>{{$employee['division']}}</h5>
                </div>
                <div>
                    <a href="/employees/edit?e={{$employee['id']}}"><button class="btn btn-secondary"><i class="bi bi-pencil"></i> Edit</button></a>
                    <button class="btn btn-danger ml-2"><i class="bi bi-trash"></i> Delete</button>
                </div>
            </div>

            <hr class="my-4">

            <div class="container m-0">
                <!-- Tab Navigation -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="benefits-view-tab" data-toggle="tab" href="#benefits-view" role="tab" aria-controls="benefits-view" aria-selected="true">Benefits</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="deductions-view-tab" data-toggle="tab" href="#deductions-view" role="tab" aria-controls="deductions-view" aria-selected="false">Deductions</a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="benefits-view" role="tabpanel">
                        <!-- Benefits -->
                        <main class="pt-2">

                            <header class="flex justify-between">
                                <div>
                                    <!-- Month Selection -->
                                    <select name="m" class="form-select btn btn-light text-left">
                                        <option value="1" {{ $month == '1' ? 'selected' : '' }}>January</option>
                                        <option value="2" {{ $month == '2' ? 'selected' : '' }}>February</option>
                                        <option value="3" {{ $month == '3' ? 'selected' : '' }}>March</option>
                                        <option value="4" {{ $month == '4' ? 'selected' : '' }}>April</option>
                                        <option value="5" {{ $month == '5' ? 'selected' : '' }}>May</option>
                                        <option value="6" {{ $month == '6' ? 'selected' : '' }}>June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>

                                    <!-- Year Selection -->
                                    <select name="y" class="form-select btn btn-light text-left">
                                        <option value="2024" {{ $year == '2024' ? 'selected' : '' }}>2024</option>
                                        <option value="2025" {{ $year == '2025' ? 'selected' : '' }}>2025</option>
                                    </select>

                                    <button class="btn btn-light"><i class="bi bi-filter"></i> Filter</button>
                                </div>
                                <div>
                                    <button class="btn btn-secondary"><i class="bi bi-plus"></i> Add Benefit</button>
                                </div>
                            </header>

                            <!-- Benefits List -->
                            <div class="mt-2">
                                @foreach ($employee['benefits'] as $benefit)
                                <div class="card mb-2">
                                    <div class="flex items-center px-3 py-1 justify-between">
                                        <div>{{$benefit['name']}}</div>
                                        <div class="font-bold text-green-400">{{$benefit['amount']}}</div>
                                        <div>
                                            <button class="btn rounded-circle w-12 h-12 hover:bg-gray-50">
                                                <i class="bi bi-pencil"></i>
                                            </button>
                                            <button class="btn rounded-circle w-12 h-12 hover:bg-gray-50">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                            

                                
                            
                        </main>

                    </div>
                    <div class="tab-pane fade" id="deductions-view" role="tabpanel" aria-labelledby="deductions-view-tab">
                        <main class="pt-2">

                        </main>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
