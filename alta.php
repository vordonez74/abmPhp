<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$celular = $_POST['celular'];

$solicitud = "INSERT INTO data (nombre,apellido,edad,celular) VALUES('$nombre','$apellido','$edad','$celular')";
$resultado = mysqli_query($conexion,$solicitud);
header("location: index.php");
?>