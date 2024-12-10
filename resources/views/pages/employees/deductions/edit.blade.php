<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add Employee Deduction</title>

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
                    <h1 class="text-4xl font-black -mt-1">Update Employee Deduction</h1>
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
            </div>

            <hr class="my-4">

            <form method="POST">
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="form-label">Deduction Type</label> <br/>
                        <x-deduction-type-selector class="w-full border btn py-2">{{$deductionType['id']}}</x-deduction-type-selector>
                    </div>
                    <div>
                        <label class="form-label">Amount</label>
                        <input type="number" class="form-control" name="employeeId" required min="1" value="{{$amount}}">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-4 float-right"><i class="bi bi-save"></i> Update Deduction</button>
            </form>

        </div>
    </body>
</html>
