<?php
include("conexion.php");
$solicitud = "select user_login from wp_users";
$resultado = mysqli_query($conexion,$solicitud);
var_dump($resultado);



?>