<?php
include('conexion.php');
$id = $_GET['id'];
$solicitud = "SELECT * FROM data WHERE id=$id";
$resultado = mysqli_query($conexion,$solicitud);
?>    
<h1>ABM con php</h1>
<form method="POST" action="actualizar.php">
<?php
while($fila = mysqli_fetch_array($resultado)){
    echo "<label>Nombre:</label><br>";
    echo "<input type='text' name='nombre' value='".$fila['nombre']."'><br>";
    echo "<label>Apellido:</label><br>";
    echo "<input type='text' name='apellido' value='".$fila['apellido']."'><br>";
    echo "<label>Edad:</label><br>";
    echo "<input type='text' name='edad' value='".$fila['edad']."'><br>";
    echo "<label>Celular:</label><br>";
    echo "<input type='text' name='celular' value='".$fila['celular']."'><br><br>";
    echo "<input type='hidden' name='id' value='".$id."'><br>";
}    
?>
    <input type="submit" name="modificar" value="Modificar">
</form>   
<br>
