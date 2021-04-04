<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alejandro O.</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
     <h1>ABM con php</h1>
    <form method="POST" action="alta.php"><br>
    <label>Nombre:</label><br>
    <input type="text" name="nombre"><br>
    <label>Apellido:</label><br>
    <input type="text" name="apellido"><br>
    <label>Edad:</label><br>
    <input type="text" name="edad"><br>
    <label>Celular:</label><br>
    <input type="text" name="celular"><br><br>
    <input type="submit" name="enviar" value="ALTA">
    </form>   
    <br>
    <?php
        include("conexion.php");
        $solicitud = "Select * from data";
        $resultado = mysqli_query($conexion,$solicitud);
        echo "<table><tr><th>Nombre</th><th>Apellido</th><th>Edad</th><th>Celular</th><th colspan='2'>Acciones</th></tr>";
        while($fila =mysqli_fetch_array($resultado)){
            echo "<tr>";
            echo "<td>".$fila['nombre']."</td>";
            echo "<td>".$fila['apellido']."</td>";
            echo "<td>".$fila['edad']."</td>";
            echo "<td>".$fila['celular']."</td>";
            echo "<td><a href='baja.php?id=".$fila['id']."'>Eliminar</a></td>";
            echo "<td><a href='modificacion.php?id=".$fila['id']."'>Modificar</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>