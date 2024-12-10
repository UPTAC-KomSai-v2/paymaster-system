<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('pages/welcome');
});

Route::get('/employees', function () {
    $employees = [
        [   
            'id' => 1,
            'firstName' => 'Juan', 
            'lastName' => 'Dela Cruz', 
            'employeeId' => '1234',
            'designation' => 'Instructor 2',
            'division' => 'Division of Humanities',
            'salaryGrade' => 1
        ],
        [   
            'id' => 2,
            'firstName' => 'Pedro', 
            'lastName' => 'Penduko', 
            'employeeId' => '2468',
            'designation' => 'Instructor 3',
            'division' => 'Division of Management',
            'salaryGrade' => 3
        ],
    ];

    return view('pages/employees/list', compact('employees'));
});

Route::get('/employees/view', function (Request $request) {
    $employeeId = $request->query('e');
    $month = $request->query('m');
    $year = $request->query('y');
    
    $employee = [   
        'id' => 1,
        'firstName' => 'Juan', 
        'lastName' => 'Dela Cruz', 
        'employeeId' => '1234',
        'designation' => 'Instructor 2',
        'division' => 'Division of Humanities',
        'salaryGrade' => 1,
        'benefits' => [
            [
                'id' => 1,
                'name' => 'Some Benefit 1',
                'amount' => 100
            ],
            [
                'id' => 2,
                'name' => 'Some Benefit 2',
                'amount' => 12345
            ]
            ],
        'deductions' => [
            [
                'id' => 1,
                'name' => 'Some Deduction 1',
                'amount' => 100
            ],
            [
                'id' => 2,
                'name' => 'Some Deduction 2',
                'amount' => 12345
            ]
        ]
    ];
    

    return view('pages/employees/view', compact('employee', 'month', 'year'));
});

Route::get('/employees/create', function () {
    return view('pages/employees/create');
});

Route::get('/employees/edit', function (Request $request) {
    $employeeId = $request->query('e');
    
    $employee = [   
        'id' => 1,
        'firstName' => 'Juan', 
        'lastName' => 'Dela Cruz', 
        'employeeId' => '1234',
        'designation' => 'Instructor 2',
        'division' => 'Division of Humanities',
        'salaryGrade' => 1
    ];
    

    return view('pages/employees/edit', compact('employee'));
});


Route::get('/reports', function () {
    return view('pages/reports');
});

Route::get('/employees/benefits/add', function (Request $request) {
    $employeeId = $request->query('e');
    
    $employee = [   
        'id' => 1,
        'firstName' => 'Juan', 
        'lastName' => 'Dela Cruz', 
        'employeeId' => '1234',
        'designation' => 'Instructor 2',
        'division' => 'Division of Humanities',
        'salaryGrade' => 1
    ];

    return view('pages/employees/benefits/add', compact('employee'));
});

Route::get('/employees/benefits/edit', function (Request $request) {
    $employeeId = $request->query('e');
    $benefitTypeId = $request->query('b');
    
    $employee = [   
        'id' => 1,
        'firstName' => 'Juan', 
        'lastName' => 'Dela Cruz', 
        'employeeId' => '1234',
        'designation' => 'Instructor 2',
        'division' => 'Division of Humanities',
        'salaryGrade' => 1
    ];

    $benefitType = [
        'id' => 2,
        'name' => 'Bonus'
    ];

    $amount = 123;

    return view('pages/employees/benefits/edit', compact('employee', 'benefitType', 'amount'));
});

Route::get('/employees/deductions/add', function (Request $request) {
    $employeeId = $request->query('e');
    
    $employee = [   
        'id' => 1,
        'firstName' => 'Juan', 
        'lastName' => 'Dela Cruz', 
        'employeeId' => '1234',
        'designation' => 'Instructor 2',
        'division' => 'Division of Humanities',
        'salaryGrade' => 1
    ];

    return view('pages/employees/deductions/add', compact('employee'));
});

Route::get('/employees/deductions/edit', function (Request $request) {
    $employeeId = $request->query('e');
    $deductionTypeId = $request->query('b');
    
    $employee = [   
        'id' => 1,
        'firstName' => 'Juan', 
        'lastName' => 'Dela Cruz', 
        'employeeId' => '1234',
        'designation' => 'Instructor 2',
        'division' => 'Division of Humanities',
        'salaryGrade' => 1
    ];

    $deductionType = [
        'id' => 2,
        'name' => 'Lates'
    ];

    $amount = 123;

    return view('pages/employees/deductions/edit', compact('employee', 'deductionType', 'amount'));
});