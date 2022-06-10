<?php

include("conexion.php");
$con=conectar();

$IDpersona=$_POST['IDpersona'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Edad=$_POST['Edad'];

$sql="UPDATE Persona SET Nombre='$Nombre',Apellido='$Apellido',Edad='$Edad' WHERE IDpersona='$IDpersona'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>