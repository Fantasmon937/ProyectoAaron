<?php
include("conexion.php");
$con=conectar();

$IDpersona=$_POST['IDpersona'];
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Edad=$_POST['Edad'];


$sql="INSERT INTO Persona VALUES('$IDpersona','$Nombre','$Apellido','$Edad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>