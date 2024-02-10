<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header("location: actualizar.php");
    exit;
}

$conn = new mysqli("localhost", "root", "", "tarea1");

// Verificar si se recibió el ID del formulario
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    
    // Consultar y mostrar la información actual del usuario
    $sql = "SELECT * FROM usuario WHERE id = '$id'";
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        $usuario = $resultado->fetch_assoc();
    } else {
        echo "No se encontró el usuario con el ID seleccionado.";
        exit;
    }
} else {
    echo "Por favor, seleccione un ID.";
    exit;
}

// Actualizar los datos del usuario si se enviaron los valores del formulario
if (isset($_POST['cedula']) && isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['usuario']) && isset($_POST['password'])) {
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    
    // Actualizar la información del usuario en la base de datos
    $sql = "UPDATE usuario SET cedula='$cedula', nombre='$nombre', apellido='$apellido', usuario='$usuario', password='$password' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Datos actualizados correctamente.";
        // Consultar nuevamente la información actualizada del usuario
        $sql = "SELECT * FROM usuario WHERE id = '$id'";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            $usuario = $resultado->fetch_assoc();
        } else {
            echo "No se encontró el usuario con el ID seleccionado.";
            exit;
        }
    } else {
        echo "Error al actualizar los datos: " . $conn->error;
        exit;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

<!DOCTYPE html>
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
        table {
            width: 60%;
            margin: 20px auto;
            background-color: #3f86a1;
            border-collapse: collapse;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #fff;
        }
        
        th {
            background-color: #1e5372;
            color: #fff;
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
    </style>
    <title>Información Actualizada</title>
</head>
<body>
<div class="logo">
            <img src="\TAREA1HERRERAWILSBER284A4\img\logoIUTA.png" alt="Logo IUTA">
        </div>
    <h2>los datos actualizados son los siguientes:</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>carrera</th>
            <th>Usuario</th>
            <th>Password</th>
        </tr>
        <tr>
            <td><?php echo $usuario['id']; ?></td>
            <td><?php echo $usuario['cedula']; ?></td>
            <td><?php echo $usuario['nombre']; ?></td>
            <td><?php echo $usuario['apellido']; ?></td>
            <td><?php echo $usuario['carrera']; ?></td>
            <td><?php echo $usuario['usuario']; ?></td>
            <td><?php echo $usuario['password']; ?></td>
        </tr>
    </table>
    <br>
    <form action="gestionar_usuarios.php" method="post">
    <input type="submit" value="Consultar nuevamente">
    </form>
    <form action="principal.html" method="post">
        <input type="submit" value="Volver al inicio">
    </form>
    <form action="logout.php" method="post">
        <input type="submit" value="Cerrar sesión">
    </form>
    
</body>
</html>

<!-- HERRERAWILSBER 284A4 -->