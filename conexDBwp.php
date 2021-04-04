<?php
include("conexion.php");
$solicitud = "select nombre from data";
$resultado = mysqli_query($conexion,$solicitud);
echo "<br>";
var_dump($resultado);



?>