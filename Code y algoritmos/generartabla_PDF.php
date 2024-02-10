<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        $this->Image('img/logoIUTA.png', 10, 10, 30);
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(65);
        $this->Cell(50, 10, 'Reporte de Usuarios', 1, 0, 'C');
        $this->Ln(30);
    }

    // Pie de página
    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, utf8_decode('Página'). $this->PageNo(), 0, 0, 'C');
    }
}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12);

// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tarea1";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para obtener la información de la tabla usuario
$sql = "SELECT * FROM usuario";
$result = $conn->query($sql);

// Procesar los resultados de la consulta
// Consulta SQL para obtener la información de la tabla usuario
$sql = "SELECT * FROM usuario";
$result = $conn->query($sql);

// Procesar los resultados de la consulta
if ($result->num_rows > 0) {
    // Encabezados de la tabla
      
      $pdf->SetFillColor(135, 206, 250); // Establecer el color de relleno celeste
      $pdf->Cell(10, 10, 'ID', 1, 0, 'C', true); // Agregar el parámetro true para activar el relleno
      $pdf->Cell(27, 10, 'Cedula', 1, 0, 'C', true);
      $pdf->Cell(25, 10, 'Nombre', 1, 0, 'C', true);
      $pdf->Cell(25, 10, 'Apellido', 1, 0, 'C', true);
      $pdf->Cell(60, 10, 'Carrera', 1, 0, 'C', true);
      $pdf->Cell(35, 10, 'Usuario', 1, 0, 'C', true);
  
    $pdf->Ln(); // Salto de línea

    while ($row = $result->fetch_assoc()) {
        // Datos de cada fila
        $pdf->Cell(10, 10, $row['id'], 1);
        $pdf->Cell(27, 10, $row['cedula'], 1);
        $pdf->Cell(25, 10, $row['nombre'], 1);
        $pdf->Cell(25, 10, $row['apellido'], 1);
        $pdf->Cell(60, 10, $row['carrera'], 1);
        $pdf->Cell(35, 10, $row['usuario'], 1);
        $pdf->Ln(); // Salto de línea
    }
} else {
    $pdf->Cell(0, 10, 'No hay usuarios en la base de datos', 1, 0, 'C');
}
// Cerrar la conexión a la base de datos
$conn->close();

// Salida del PDF
$pdf->Output();
