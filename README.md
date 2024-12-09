# Paymaster System

## Description
Paymaster is a payroll management system designed specifically for the University of the Philippines Tacloban College (UP Tacloban). The system streamlines the process of calculating and disbursing employee salaries, tracking work hours, managing deductions, and generating payslips. It aims to improve efficiency, reduce errors, and ensure timely and accurate payroll processing for both faculty and staff at UP Tacloban.

## Features
- **Salary Calculation**: Automatically calculate salaries based on hourly rates, fixed salaries, or other payroll structures, including overtime and bonuses.
- **Deductions Management**: Handle mandatory and voluntary deductions such as taxes, contributions (e.g., SSS, PhilHealth, Pag-IBIG), and loan repayments.
- **Payslip Generation**: Generate payslips for each employee, summarizing earnings, deductions, and net pay for each pay period.
- **Tax Compliance**: Ensure payroll complies with government tax regulations and generates necessary reports for submission.
- **Report Generation**: Generate various reports such as payroll summaries, employee earnings, tax reports, and deduction details.
- **User Role Management**: Provide different access levels for administrators, payroll managers, and employees to ensure data security and appropriate access.
- **Secure Data Storage**: Ensure employee data and payroll details are stored securely and meet privacy standards.

## Folder Structure

Below is the general folder structure of the Laravel project:

```
root
├── app
│   ├── Console
│   ├── Exceptions
│   ├── Http
│   │   ├── Controllers
│   │   ├── Middleware
│   ├── Models
│   └── Providers
├── bootstrap
│   └── cache
├── config
├── database
│   ├── factories
│   ├── migrations
│   └── seeders
├── public
│   ├── css
│   ├── js
│   └── index.php
├── resources
│   ├── css
│   ├── js
│   ├── lang
│   └── views
├── routes
│   ├── api.php
│   ├── channels.php
│   ├── console.php
│   └── web.php
├── storage
│   ├── app
│   ├── framework
│   │   ├── cache
│   │   ├── sessions
│   │   └── views
│   └── logs
├── tests
│   ├── Feature
│   └── Unit
├── vendor
├── .env
├── artisan
├── composer.json
├── package.json
├── phpunit.xml
└── README.md
```

### Key Folders

- **app/**: Contains the core of the application including models, controllers, and middleware.
- **bootstrap/**: Contains the application bootstrap files, including the `app.php` file.
- **config/**: Contains all of the configuration files for the application.
- **database/**: Houses database migrations, seeders, and factories.
- **public/**: The directory accessible by the web server, containing assets and the front-facing `index.php`.
- **resources/**: Contains views, raw assets (CSS/JS), and language files.
- **routes/**: Defines all application routes (web, API, console, etc.).
- **storage/**: Contains compiled views, file-based sessions, caches, and logs.
- **tests/**: Holds automated tests for the application.
- **vendor/**: Contains Composer dependencies.

## Installation

### Prerequisites
- PHP

### Steps
1. Clone the repository:
   ```bash
   https://github.com/Frosco03/paymaster-system.git
   ```

2. Setting up this repository

    Open a terminal/powershell in this folder and run these commands:
    ```bash
    composer install
    npm install
    npm run build
    ```
    Then make a copy of .env.example and rename it to .env. Change the values to match your database setup (port, username, password, etc)

    Finally run these commands, make sure to say yes when asked:
    ```bash
    php artisan key:generate
    php artisan migrate
    ```
3. Running a development server

    Open a terminal/powershell in this folder and run 
    ```bash
    composer run dev

