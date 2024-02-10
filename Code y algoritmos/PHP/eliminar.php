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


    // Eliminar el usuario de la base de datos
    $sql = "DELETE FROM usuario WHERE id = '$id'";
    if ($conn->query($sql) === TRUE) {
        echo "La información ha sido eliminada correctamente.";
    } else {
        echo "Error al eliminar la información: " . $conn->error;
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
    <title>Información Eliminada</title>
</head>
<body>
<div class="logo">
            <img src="\TAREA1HERRERAWILSBER284A4\img\logoIUTA.png" alt="Logo IUTA">
        </div>
    <h2>La información ha sido eliminada correctamente.</h2>

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