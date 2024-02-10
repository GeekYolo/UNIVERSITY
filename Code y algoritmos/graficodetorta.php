<?php
require 'phpExcel/vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Fill;

// Crear una instancia de Spreadsheet
$spreadsheet = new Spreadsheet();

// Obtener la hoja activa
$sheet = $spreadsheet->getActiveSheet();

// Establecer datos en la hoja

// Combinar y dar formato a la celda del encabezado
$sheet->mergeCells('A1:F1');
$sheet->getStyle('A1:F1')->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setARGB('D3D3D3');
$sheet->getStyle('A1:F1')->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
$sheet->getStyle('A1:F1')->getFont()->setBold(true);
$sheet->setCellValue('A1', 'Reporte de Usuarios');

// Establecer los encabezados de columna
$sheet->setCellValue('A2', 'ID');
$sheet->setCellValue('B2', 'Cedula');
$sheet->setCellValue('C2', 'Nombre');
$sheet->setCellValue('D2', 'Apellido');
$sheet->setCellValue('E2', 'Carrera');
$sheet->setCellValue('F2', 'Usuario');

// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tarea1";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtener datos de la tabla 'usuario'
$sql = "SELECT carrera, COUNT(*) as count FROM usuario GROUP BY carrera";
$result = $conn->query($sql);

// Procesar los resultados de la consulta
$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[$row['carrera']] = $row['count'];
    }
}

// Cerrar la conexión a la base de datos
$conn->close();

// Crear un Writer para guardar el archivo Excel
$writer = new Xlsx($spreadsheet);

// Guardar el archivo Excel
$writer->save('reporte_usuarios.xlsx');

// Preparar los datos para el gráfico de torta
$labels = array_keys($data);
$values = array_values($data);

// Generar el gráfico de torta usando Chart.js
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gráfico de Torta</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <canvas id="pieChart"></canvas>

    <script>
        var ctx = document.getElementById('pieChart').getContext('2d');
        var pieChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    data: <?php echo json_encode($values); ?>,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.8)',
                        'rgba(54, 162, 235, 0.8)',
                        'rgba(255, 206, 86, 0.8)',
                        'rgba(75, 192, 192, 0.8)',
                        'rgba(153, 102, 255, 0.8)',
                        'rgba(255, 159, 64, 0.8)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>

    
</body>
</html>