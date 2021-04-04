<?php
/*$
host = "162.243.166.76";
$user = "cucai";
$pass = "voluntad229";
$db = "agenda2";
*/
$host = "wordpress-db-ale:3306";
$user = "wordpress";
$pass = "bcViMnngI7wz";
$db = "wordpress";

$conexion = mysqli_connect($host,$user,$pass,$db);
if(!$conexion){
    die("Fallo de coexion". mysqli_connect_error());
}
echo "Conexion exitosa";
mysqli_set_charset($conexion,"utf8");

?>