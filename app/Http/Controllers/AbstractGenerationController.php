<?php

namespace App\Http\Controllers;

use PhpOffice\PhpSpreadsheet\IOFactory;
use Symfony\Component\HttpFoundation\StreamedResponse;


class AbstractGenerationController extends Controller {
    public function downloadReport() {
        $templatePath = storage_path('app\private\templates\template-abstract.xls');
        $spreadsheet = IOFactory::load($templatePath);
        $sheet = $spreadsheet->getActiveSheet();

        // $sheet->setCellValue('A1', 'TESTTESTTEST');

        // Example: Add multiple rows dynamically
        // $data = [
        //     ['Name', 'Email', 'Phone'],
        //     ['John Doe', 'john@example.com', '123456789'],
        //     ['Jane Smith', 'jane@example.com', '987654321'],
        // ];
        // $startRow = 5;
        // foreach ($data as $rowIndex => $rowData) {
        //     $col = 'A';
        //     foreach ($rowData as $cellValue) {
        //         $sheet->setCellValue("{$col}{$startRow}", $cellValue);
        //         $col++;
        //     }
        //     $startRow++;
        // }

        // Generate a filename
        $fileName = 'generated-abstract-' . now()->format('Y-m-d_H-i-s') . '.xlsx';

        // Stream the file as a download
        return new StreamedResponse(function () use ($spreadsheet) {
            $writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
            $writer->save('php://output');
        }, 200, [
            'Content-Type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"',
        ]);
    }
}