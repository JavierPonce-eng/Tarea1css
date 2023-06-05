<?php
    session_start();
    include_once "conexion.php";

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $username = $_POST['username'];
    $contraseña = $_POST['contraseña'];
    $correo = $_POST['correo'];
    $fecha_nac = $_POST['fecha_nac'];
    $rut = $_POST['rut'];

    $sql = "INSERT INTO usuarios VALUES ('','$nombre', '$apellido', '$username', '$contraseña', '$correo', '$fecha_nac', '$rut','')";

    $query = mysqli_query ($conexion, $sql); 

    if ($query) {
        Header("Location: index.php");
        exit();
    } 
?>