<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$celular = $_POST['celular'];
$id = $_POST['id'];

include('conexion.php');

$solicitud = "UPDATE data SET nombre='$nombre', apellido='$apellido',edad='$edad',celular='$celular' WHERE id='$id'";
$respuesta = mysqli_query($conexion,$solicitud);
echo "<script>console.log('Respuesta ".$respuesta."');</script>";
header("location: index.php");
?>