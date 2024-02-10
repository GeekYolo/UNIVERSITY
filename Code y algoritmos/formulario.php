<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header("location: actualizar.php");
    exit;
}

$conn = new mysqli("localhost", "root", "", "tarea1");

// Obtener el ID del usuario a editar
$usuarioId = $_POST['id'];

// Consultar y mostrar la información del usuario seleccionado
$sql = "SELECT * FROM usuario WHERE id = '$usuarioId'";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc();
} else {
    $error = "No se encontró el usuario ó el mismo no existe";
}
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
        
        input[type="submit"] {
            background-color: #1e5372;
            color: #fff;
            cursor: pointer;
            border: 1px solid black;
        }
        
        .error {
            color: red;
        }
    </style>
    <title>Formulario de Actualización</title>
</head>
<body>
<div class="logo">
            <img src="\TAREA1HERRERAWILSBER284A4\img\logoIUTA.png" alt="Logo IUTA">
        </div>
    <h2>Formulario de Actualización</h2>

    <?php if (isset($error)) : ?>
        <p class="error"><?php echo $error; ?></p>
        <form action="gestionar_usuarios.php" method="post">
            <input type="submit" value="Volver a consultar">
        </form>
        <br>
        <form action="principal.html" method="post">
            <input type="submit" value="Volver al inicio">
        </form>
    <?php else : ?>
        
        <form action="actualizar.php" method="post">
            <label for="id">ID:</label>
            <input type="number" name="id" value="<?php echo $usuario['id']; ?>" required readonly>
            <br>
            <label for="cedula">Cédula:</label>
            <input type="text" name="cedula" pattern="[0-9]+" value="<?php echo $usuario['cedula']; ?>" required>
            <br>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="<?php echo $usuario['nombre']; ?>" required>
            <br>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" value="<?php echo $usuario['apellido']; ?>" required>
            <br>
            <label for="carrera">Carrera:</label>
            <input type="text" name="Carrera" value="<?php echo $usuario['carrera']; ?>" required>
            <br>
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" value="<?php echo $usuario['usuario']; ?>" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <br>
            <input type="submit" value="Actualizar información">
        </form>
        <form action="eliminar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">
        <input type="submit" value="Eliminar información">
        </form>
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
        
    <?php endif; ?>
</body>
</html>