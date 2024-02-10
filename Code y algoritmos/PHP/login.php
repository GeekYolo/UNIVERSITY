<?php
session_start();

// Verificar si el usuario ingreso los datos
if(isset($_POST['usuario']) && isset($_POST['password'])){
    
    $username = $_POST['usuario'];
    $password = $_POST['password'];
    
    // Consultar la base de datos para verificar el usuario y contraseña
    $conn = new mysqli("localhost", "root", "", "tarea1");
    $result = $conn->query("SELECT * FROM usuario WHERE usuario='$username' AND password='$password'");
    
    if($result->num_rows > 0){
        // Credenciales correctas, iniciar sesión
        $_SESSION['loggedin'] = true;
        header("location: principal.html");
        exit;      
    }else{
    
        echo "<br>";
        
    }
}
?>
<html>
    <head>
    <style> 
    body { text-align: center;
        background-color: #bbdefb; }
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
    background-color: #0e6898;
    color: #fff;
    padding: 10px 15px;
            }
    input:hover {
    background-color: #3f86a1;
    }
    
    h1 { color: #white; }
    h3 {
    color: #bbdefb;
    }

    
    </style>
    </head>
<h1>USUARIO O CLAVE INCORRECTOS</h1>
<h3>Puedes intentar nuevamente</h3>

<form action="logout.php" method="post">
<input type="submit" value="intentar nuevamente">
</form>
</html>

<!-- HERRERAWILSBER 284A4 -->