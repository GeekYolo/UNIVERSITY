<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
    <style>
        body {
  text-align: center;
  background-color: #bbdefb;
}

.container {
  width: 67%;
  margin: 15px auto;
  background-color: #8cc0f5;
  border-radius: 5px;
  padding: 10px;
}

.logo {
            text-align: center;
        }
        

.logo img {
            max-width: 200px;
            margin: 20px;
            align: left;
        }
table.dataTable {
  width: 85%;
  border-collapse: collapse;
  border-spacing: 0;
}

table.dataTable thead th,
table.dataTable tbody td {
  padding: 10px;
  text-align: left;
  border-bottom: 3px solid #fff;
  border: 2px solid black;
  font-size: 20px;
  height: 56px;
}

table.dataTable thead th {
  background-color: #1e5372;
  color: #fff;
}

table.dataTable tbody tr:nth-child(even) {
  background-color: #e3f2fd;
  border: 2px solid black;
}
table.dataTable tbody tr:nth-child(odd) {
  background-color: #e3f2fd;
  border: 2px solid black;
}

table.dataTable tbody tr:hover {
  background-color: #b3e5fc;
}

form {
  width: 200px;
  margin: 0 auto;
  background-color: #8cc0f5;
  padding: 15px;
  border-radius: 5px;
}

.acciones {
  display: flex;
  justify-content: space-between
  
}

.acciones form {
  width: 45%;
  margin: 0;
  height: 30px;
  align: center;
}

input {
  width: 100%;
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
    <title>Página de usuarios</title>
</head>
<body>
<div class="logo">
            <img src="\TAREA1HERRERAWILSBER284A4\img\logoIUTA.png" alt="Logo IUTA">
        </div>
    <h2>INFORMACIÓN DE USUARIOS</h2>
    <div class="container">

        <?php
        session_start();

        if (!isset($_SESSION['loggedin'])) {
            header("location: actualizar.php");
            exit;
        }

        $conn = new mysqli("localhost", "root", "", "tarea1");

        // Consultar y mostrar la información de la tabla usuario
        $sql = "SELECT * FROM usuario";
        $resultado = $conn->query($sql);

        if ($resultado->num_rows > 0) {
            echo '<table id="usuarios">
                  <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cédula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Carrera</th>
                        <th>Usuario</th>
                        <th>Password</th>
                        <th>Acciones</th>
                    </tr>
                  </thead>
                  <tbody>';

            while ($usuario = $resultado->fetch_assoc()) {
                echo '<tr>
                        <td>' . $usuario['id'] . '</td>
                        <td>' . $usuario['cedula'] . '</td>
                        <td>' . $usuario['nombre'] . '</td>
                        <td>' . $usuario['apellido'] . '</td>
                        <td>' . $usuario['carrera'] . '</td>
                        <td>' . $usuario['usuario'] . '</td>
                        <td>' . $usuario['password'] . '</td>
                        <td class=acciones>
                            <form action="formulario.php" method="post">
                                <input type="hidden" name="id" value="' . $usuario['id'] . '">
                                <input type="submit" value="Modificar">
                            </form>
                            <form action="eliminar.php" method="post" onsubmit="return confirm(\'Seguro que deseas eliminar este usuario?\')">
                                <input type="hidden" name="id" value="' . $usuario['id'] . '">
                                <input type="submit" value="Eliminar">
                            </form>
                        </td>
                      </tr>';
            }

            echo '</tbody>
                  </table>';
        } else {
            echo "No se encontraron usuarios en la base de datos.";
        }

        // Cerrar la conexión a la base de datos
        $conn->close();
        ?>
         <br>
    <form action="updateuser.php" method="post">
        <input type="submit" value="Agregar nuevo usuario">
    </form>
    <form action="principal.html" method="post">
            <input type="submit" value="Volver al inicio">
        </form>
    <form action="logout.php" method="post">
        <input type="submit" value="Cerrar sesión">
    </form>
    </div>

    <script>
        $(document).ready(function() {
            // Crear la tabla DataTable
            $('#usuarios').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.11.4/i18n/Spanish.json"
                },
                "scrollX": true,
                "autoWidth": true
            });
        });
    </script>
</body>
</html>