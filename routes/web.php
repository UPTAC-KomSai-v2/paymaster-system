<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
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
                'name' => 'Some Benefit 1',
                'amount' => 100
            ],
            [
                'name' => 'Some Benefit 2',
                'amount' => 12345
            ]
            ],
        'deductions' => [
            [
                'name' => 'Some Deduction 1',
                'amount' => 100
            ],
            [
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
