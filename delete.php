<?php

include("conexion.php");
$con=conectar();

$IDpersona=$_GET['id'];

$sql="DELETE FROM Persona  WHERE IDpersona='$IDpersona'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>