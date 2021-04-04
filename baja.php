<?php
include('conexion.php');
$id = $_GET['id'];
$solicitud = "DELETE FROM data WHERE id=$id";
$respuesta = mysqli_query($conexion,$solicitud);
header('location: index.php');
?>