<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "Proyecto";

$conexion = new mysqli($server, $user, $password, $db);

mysqli_select_db($conexion,$db);

if ($conexion->connect_errno) {
    die("Conexión fallida: ".$conexion->connect_errno);
}
?>