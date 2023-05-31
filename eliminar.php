<?php

include("conexion.php");

if (isset($_GET['delete'])) {
    $rut = $_GET['delete'];

    $sql = "DELETE FROM 'usuarios' WHERE RUT=$rut";

    if ($con->query($sql) === true) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . $con->error;
    }
}

if($query){
    Header("Location: inicio.php");
}
