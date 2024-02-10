<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header("location: updateuser.php");
    exit;
}

$conn = new mysqli("localhost", "root", "", "tarea1");

// Verificar si se recibieron los datos del formulario
if (isset($_POST['cedula']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['usuario']) && isset($_POST['password'])) {

    // Obtener los datos del formulario
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $carrera = $_POST['carrera'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Verificar si la cédula ya existe en la base de datos
    $verificar_sql = "SELECT cedula FROM usuario WHERE cedula = '$cedula'";
    $verificar_resultado = $conn->query($verificar_sql);

    if ($verificar_resultado->num_rows > 0) {
        echo "<h2>La cédula ya existe en la base de datos. Por favor, ingrese una cédula diferente.</h2>";
    } else {
        // Registrar los datos en la tabla "usuario"
        $sql = "INSERT INTO `usuario`(`cedula`,`nombre`,`apellido`,`carrera`,`usuario`,`password`) VALUES('$cedula','$nombre','$apellido','$carrera','$usuario','$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Datos registrados correctamente.";
        } else {
            echo "Error al registrar los datos: " . $conn->error;
        }
    }

    $conn->close();
} else {
    echo "Por favor, ingrese todos los campos del formulario.";
}
?>

<html>
<head>
    <style>
        body {
            text-align: center;
            background-color: #bbdefb;
        }
        .logo {
            text-align: center;
        }
        

.logo img {
            max-width: 200px;
            margin: 20px;
            align: left;
        }
        form {
            width: 300px;
            margin: 0 auto;
            background-color: #3f86a1;
            padding: 15px;
            border-radius: 5px;
        }
        
        input {
            width: 85%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border: 1px solid black;
        }
        
        h1 {
            color: #0e6898;
        }
        
        h3 {
            color: #bbdefb;
        }
    </style>
</head>
<body>
<div class="logo">
            <img src="\TAREA1HERRERAWILSBER284A4\img\logoIUTA.png" alt="Logo IUTA">
        </div>
    <h1>REGISTRO DE DATOS</h1>
    <h3>Más acciones</h3>

    <form action="updateuser.php" method="post">
        <input type="submit" value="Registrar de nuevo">
    </form>
    <form action="gestionar_usuarios.php" method="post">
        <input type="submit" value="Consultar o modificar usuarios">
    </form>
    <form action="principal.html" method="post">
        <input type="submit" value="Volver al inicio">
    </form>
</body>
</html>



<!-- HERRERAWILSBER 284A4 -->