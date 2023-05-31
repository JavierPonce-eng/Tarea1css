<?php

    include("conexion.php");


    $sql="SELECT * FROM usuarios";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);

    if (isset($_POST["btnEnviar"])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $correo = $_POST['correo'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $rut = $_POST['rut'];

    $sql = "INSERT INTO 'usuarios' VALUES ('$nombre', '$apellido', '$username', '$password', '$correo', '$fecha_nacimiento', '$rut')";

    }

    if($query){
        Header("Location: inicio.php");
    }
    

?>