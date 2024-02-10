<?php
require __DIR__ . "/vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
 
$documento = new Spreadsheet();
$documento
    ->getProperties()
    ->setCreator("Aquí va el creador, como cadena")
    ->setLastModifiedBy('Parzibyte') // última vez modificado por
    ->setTitle('Mi primer documento creado con PhpSpreadSheet')
    ->setSubject('El asunto')
    ->setDescription('Este documento fue generado para parzibyte.me')
    ->setKeywords('etiquetas o palabras clave separadas por espacios')
    ->setCategory('La categoría');
 
$writer = new Xlsx($documento);
 
# Le pasamos la ruta de guardado
$writer->save('nombre_del_documento.xlsx');