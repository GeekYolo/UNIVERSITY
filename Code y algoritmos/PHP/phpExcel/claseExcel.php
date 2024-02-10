<?php
ini_set("default_charset", "UTF-8");
mb_internal_encoding("UTF-8");
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Writer\Xls;
//cargar la clase phpspreadsheet usando namespaces
use PhpOffice\PhpSpreadsheet\Spreadsheet;

//Llamado a iofactory en lugar de writer xlsx.
use PhpOffice\PhpSpreadsheet\IOFactory;

//Llamado la Class fecha (date)
use PhpOffice\PhpSpreadsheet\Shared\Date;

//phpspreadsheet class de estilo de formato numero 
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

//Estilo rich text
use PhpOffice\PhpSpreadsheet\RichText\RichText;

//Estilo Color
use PhpOffice\PhpSpreadsheet\Style\Color;

//class Drawing Dibujar la imagen 
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;

//class alineación
use PhpOffice\PhpSpreadsheet\Style\Alignment;

use PhpOffice\PhpSpreadsheet\Style\Fill;

//NO TOCAR DE AQUÍ PARA ARRIBA
$spreadsheet = new Spreadsheet();

$activeWorksheet = $spreadsheet->getActiveSheet();

$arcExcel = 'pruebaExcel7.XLS';

$spreadsheet->setActiveSheetIndex(0);
$activeWorksheet = $spreadsheet->getActiveSheet();
$spreadsheet->getDefaultStyle()->getFont()->setName('Tahoma');
$spreadsheet->getActiveSheet()->getRowDimension('1')->setRowHeight(20);

$activeWorksheet->getStyle('1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$activeWorksheet->getStyle('1')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);

$activeWorksheet->getStyle('A')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$activeWorksheet->getStyle('A')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);


$activeWorksheet->getStyle('B')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$activeWorksheet->getStyle('B')->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);

//DIMESIONAR CELDAS
$spreadsheet->getActiveSheet()
            ->getColumnDimension('A')
            ->setAutoSize(true);

$spreadsheet->getActiveSheet()
            ->getColumnDimension('B')
            ->setAutoSize(true);

$spreadsheet->getActiveSheet()
->getColumnDimension('C')
->setAutoSize(true);

 $spreadsheet->getActiveSheet()
 ->getColumnDimension('D')
->setAutoSize(true);

$spreadsheet->getActiveSheet()
->getColumnDimension('E')
->setAutoSize(true);
//COLUMNAS
$activeWorksheet->setCellValue('A1', 'C.I');   //1
$activeWorksheet->getStyle('A1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('C0C0C0');

$activeWorksheet->setCellValue('B1', 'Nombre');   //2
$activeWorksheet->getStyle('B1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('C0C0C0');

$activeWorksheet->setCellValue('C1', 'Apellido');   //2
$activeWorksheet->getStyle('C1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('C0C0C0');

$activeWorksheet->setCellValue('D1', 'Edad');   //2
$activeWorksheet->getStyle('D1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('C0C0C0');

$activeWorksheet->setCellValue('E1', 'Carrera');   //2
$activeWorksheet->getStyle('CE1')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('C0C0C0');


//DATOS

$activeWorksheet->getStyle('A2')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('ACB9CA');
$activeWorksheet->setCellValue('A2', '10500000');   

$activeWorksheet->getStyle('B2')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF0000');
$activeWorksheet->setCellValue('B2', 'Pedro');   

//$activeWorksheet->getStyle('C2')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF00');
$activeWorksheet->setCellValue('C2', 'Perez');

//$activeWorksheet->getStyle('D2')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF00');
$activeWorksheet->setCellValue('D2', '25');

//$activeWorksheet->getStyle('E2')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF00');
$activeWorksheet->setCellValue('E2', 'Informatica');   

$activeWorksheet->getStyle('A3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('ACB9CA');
$activeWorksheet->setCellValue('A3', '10500001');   

$activeWorksheet->getStyle('B3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FF0000');
$activeWorksheet->setCellValue('B3', 'JUAN');   

//$activeWorksheet->getStyle('C3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF00');
$activeWorksheet->setCellValue('C3', 'MENDEZ'); 

//$activeWorksheet->getStyle('D3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF00');
$activeWorksheet->setCellValue('D3', '20'); 

//$activeWorksheet->getStyle('E3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('FFFF00');
$activeWorksheet->setCellValue('E3', 'Administracion de Empresas'); 

$writer = new Xls($spreadsheet);
$writer->save($arcExcel);




?>