<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExportController extends CI_Controller {

    public function exportData() {
        // Load your model
        $this->load->model('Your_model');
        $data = $this->Your_model->findAll();

        // Create a new Spreadsheet object
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Add headers to the sheet
        $headers = ['Column1', 'Column2', 'Column3']; // Replace with your actual column names
        $sheet->fromArray([$headers], NULL, 'A1');

        // Add data to the sheet
        $rowData = [];
        foreach ($data as $row) {
            // Adjust column names based on your actual model fields
            $rowData[] = [$row['field1'], $row['field2'], $row['field3']];
        }
        $sheet->fromArray($rowData, NULL, 'A2');

        // Set headers for download
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="exported_data.xlsx"');
        header('Cache-Control: max-age=0');

        // Save the spreadsheet to a file
        $writer = new Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    }
}
