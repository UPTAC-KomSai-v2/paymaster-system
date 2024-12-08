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

    Open a terminal/powershell in this folder and run composer run dev

