<?php

    include("conexion.php");
   

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $correo = $_POST['correo'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $rut = $_POST['rut'];

        $sql = "UPDATE 'usuarios' SET nombre='$nombre', apellido='$apellido', username='$username', password='$password',
                correo='$correo', fecha_nacimiento='$fecha_nacimiento' WHERE RUT=$rut";

        $query= mysqli_query($con,$sql);

    if($query){
        Header("Location: inicio.php");
    }
?>