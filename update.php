<?php
    session_start();
    include_once "conexion.php";

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $username = $_POST['username'];
    $contraseña = $_POST['contraseña'];
    $correo = $_POST['correo'];
    $fecha_nac = $_POST['fecha_nac'];
    $rut = $_POST['rut'];
    if(isset($_POST['is_admin'])){
        $is_admin = 1;
    }else{
        $is_admin = 0;
    }

    $sql = "UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido', username = '$username', contraseña = '$contraseña', correo = '$correo', fecha_nac = '$fecha_nac', rut='$rut', is_admin = '$is_admin' WHERE id = '$id'";
    $query = mysqli_query ($conexion, $sql); 

    if ($query) {
        Header("Location:inicio.php");
        exit();
    }
?>