<?php
require 'phpExcel/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;

// Create a Spreadsheet instance
$spreadsheet = new Spreadsheet();

// Get the active sheet
$sheet = $spreadsheet->getActiveSheet();

// Set data in the sheet

// Merge and format the header cell
$sheet->mergeCells('A1:F1');
$sheet->getStyle('A1:F1')->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setARGB('D3D3D3');
$sheet->getStyle('A1:F1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$sheet->getStyle('A1:F1')->getFont()->setBold(true);
$sheet->setCellValue('A1', 'Reporte de Usuarios');

// Set the column headers
$sheet->setCellValue('A2', 'ID');
$sheet->setCellValue('B2', 'Cedula');
$sheet->setCellValue('C2', 'Nombre');
$sheet->setCellValue('D2', 'Apellido');
$sheet->setCellValue('E2', 'Carrera');
$sheet->setCellValue('F2', 'Usuario');

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tarea1";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the 'usuario' table
$sql = "SELECT * FROM usuario";
$result = $conn->query($sql);

// Process the query results
$rowNum = 3;  // Starting row number

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $sheet->setCellValue('A' . $rowNum, $row['id']);
        $sheet->setCellValue('B' . $rowNum, $row['cedula']);
        $sheet->setCellValue('C' . $rowNum, $row['nombre']);
        $sheet->setCellValue('D' . $rowNum, $row['apellido']);
        $sheet->setCellValue('E' . $rowNum, $row['carrera']);
        $sheet->setCellValue('F' . $rowNum, $row['usuario']);
        $rowNum++;
    }
} else {
    $sheet->setCellValue('A3', 'No hay usuarios en la base de datos');
    $sheet->mergeCells('A3:F3');
    $sheet->getStyle('A3:F3')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
}

// Adjust the column widths
foreach (range('A', 'F') as $column) {
    $sheet->getColumnDimension($column)->setAutoSize(true);
}
// Obtener el rango de celdas con información
$dataRange = 'A2:F' . ($rowNum - 1);

// Establecer bordes a las celdas con información
$sheet->getStyle($dataRange)->getBorders()->getAllBorders()->setBorderStyle(Border::BORDER_THIN);

// Close the database connection
$conn->close();

// Create a Writer object to save the Excel file
$writer = new Xlsx($spreadsheet);

// Save the Excel file
$writer->save('reporte_usuarios.xlsx');