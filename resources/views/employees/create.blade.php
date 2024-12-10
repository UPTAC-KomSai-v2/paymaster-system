<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add New Employee</title>

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
                    <h1 class="text-4xl font-black -mt-1">Add New Employee</h1>
                </div>
            </header>

            <hr class="my-4">

            <form method="POST">
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="form-label">First Name *</label>
                        <input type="text" class="form-control" name="firstName" required>
                    </div>

                    <div>
                        <label class="form-label">Last Name *</label>
                        <input type="text" class="form-control" name="lastName" required>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="form-label">Employee ID</label>
                        <input type="text" class="form-control" name="employeeId">
                    </div>
                    
                    <div>
                        <label class="form-label">Division</label> <br/>
                        <select name="division" class="form-select btn border py-2 text-left w-full">
                            <option value="">(None)</option>
                            <option value="Division of Humanities">Division of Humanities</option>
                            <option value="Division of Management">Division of Management</option>
                            <option value="Division of Natural Sciences and Mathematics">Division of Natural Sciences and Mathematics</option>
                            <option value="Division of Social Sciences">Division of Social Sciences</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="form-label">Designation *</label>
                        <input type="text" class="form-control" name="firstName" required>
                    </div>

                    <div>
                        <label class="form-label">Salary Grade *</label> <br/>
                        <select name="division" class="form-select btn border py-2 text-left w-full">
                            <option value="1">SG 1</option>
                            <option value="2">SG 2</option>
                            <option value="3">SG 3</option>
                            <option value="4">SG 4</option>
                            <option value="5">SG 5</option>
                            <option value="6">SG 6</option>
                            <option value="7">SG 7</option>
                            <option value="8">SG 8</option>
                            <option value="9">SG 9</option>
                            <option value="10">SG 10</option>
                            <option value="11">SG 11</option>
                            <option value="12">SG 12</option>
                            <option value="13">SG 13</option>
                            <option value="14">SG 14</option>
                            <option value="15">SG 15</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary mt-4 float-right"><i class="bi bi-save"></i> Save Employee</button>
            </form>

        </div>
    </body>
</html>
