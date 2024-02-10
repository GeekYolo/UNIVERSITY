<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        $this->Image('img/logoIUTA.png', 10, 10, 30);
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(80);
        $this->Cell(50, 15, 'Reporte de Usuarios', 1, 0, 'C');
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

// Crear instancia de PDF
$pdf = new PDF();

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
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Agregar una nueva página por cada usuario
        $pdf->AddPage();

        // Configurar fuente
        $pdf->SetFont('Arial', '', 12);

        $pdf->Cell(20, 10, 'ID: ' . $row['id'], 0, 1);
        $pdf->Cell(50, 10, 'Nombre: ' . $row['nombre'], 0, 1);
        $pdf->Cell(50, 10, 'Apellido: ' . $row['apellido'], 0, 1);
        $pdf->Cell(50, 10, 'Carrera: ' . $row['carrera'], 0, 1);
        $pdf->Cell(50, 10, 'Usuario: ' . $row['usuario'], 1);
        // Puedes agregar más campos aquí si es necesario
    }
} else {
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 10, 'No hay usuarios en la base de datos', 0, 1, 'C');
}

// Cerrar la conexión a la base de datos
$conn->close();

// Salida del PDF
$pdf->Output();
