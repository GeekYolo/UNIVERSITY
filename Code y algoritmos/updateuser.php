<?php
session_start();

if(!isset($_SESSION['loggedin'])){
    header("location: incluir.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
        <style> body { text-align: center;
        background-color: #bbdefb; }
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
            </style>
    <title>Registrar Información</title>
</head>
<body>
<div class="logo">
            <img src="\TAREA1HERRERAWILSBER284A4\img\logoIUTA.png" alt="Logo IUTA">
        </div>
    <h2>Registro de Usuario</h2>
    <form method="post" action="incluir.php">
        <label>Cédula:</label>
        <input type="text" name="cedula"><br><br>
        <label>Nombre:</label>
        <input type="text" name="nombre"><br><br>
        <label>Apellido:</label>
        <input type="text" name="apellido"><br><br>
        <label>Carrera:</label>
        <input type="text" name="carrera"><br><br>
        <label>Usuario:</label>
        <input type="text" name="usuario"><br><br>
        <label>Password:</label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Registrar">
    </form>
    <br>
    <br>


<form action="principal.html" method="post">
<input type="submit" value="volver al inicio">
</form>
<form action="logout.php" method="post">
<input type="submit" value="Cerrar sesión">
</form>

</body>
</html>


<!-- HERRERAWILSBER 284A4 -->