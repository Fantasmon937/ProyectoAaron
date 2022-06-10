<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM Persona  WHERE IDpersona='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ProyectoFinal</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
    <form action="update.php" method="POST">

        <input type="hidden" name="IDpersona" value="<?php  echo $row['IDpersona']?>">
        <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php  echo $row['Nombre']?>">
        <input type="text" class="form-control mb-3" name="Apellido" placeholder="Apellido" value="<?php  echo $row['Apellido']?>">
        <input type="text" class="form-control mb-3" name="Edad" placeholder="Edad" value="<?php  echo $row['Edad']?>">

        <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
    </form>

    </div>
</body>
</html>